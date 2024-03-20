<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

   $username = $_GET['username'];
   $pwd = $_GET['pwd'];

   try {
      require_once '../db_connection.inc.php';
      require_once 'login_model.inc.php';
      require_once 'login_contr.inc.php';
      require_once 'login_view.inc.php';

      //ERROR HANDLERS
      $errors = [];

      if (is_input_empty($username, $pwd)) {
         $errors["empty_input"] = 'Fill in all fields!';
      }

      $result = get_user($pdo, $username);

      if (is_username_wrong($result)) {
         $errors["wrong_username"] = 'Something went wrong, check your username and password';
      }

      if (!is_username_wrong($result) && is_password_wrong($pwd, $result['pwd'])) {
         $errors["wrong_pwd"] = 'Something went wrong, check your username and password';
      }

      require_once '../config_session.inc.php';

      if ($errors) {
         $_SESSION['errors_login'] = $errors;
         header('Location: ../../index.php');
         die();
      }

      $new_session_id = session_create_id();
      $session_id = $new_session_id . '_' . $result['id'];
      session_id($session_id);

      $_SESSION['user_id'] = $result['id'];
      $_SESSION['user_username'] = htmlspecialchars($result['username']);

      $_SESSION['last_regeneration'] = time();

      header("Location: ../../index.php?login=success");

      $stmt = null;
      $pdo = null;
      die();
   } catch (PDOException $e) {
      die('Query error: ' . $e->getMessage());
   }
} else {
   header("Location: ../../index.php");
   die();
}
