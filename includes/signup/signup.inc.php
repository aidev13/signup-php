<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $signup_username = $_POST['signup_username'];
   $pwd = $_POST['pwd'];
   $signup_email = $_POST['signup_email'];

   try {
      require_once '../db_connection.inc.php';
      require_once 'signup_model.inc.php';
      require_once 'signup_contr.inc.php';

      //ERROR HANDLERS
      $errors = [];

      if (is_input_empty($signup_username, $pwd, $signup_email)) {
         $errors["empty_input"] = 'Fill in all fields!';
      }
      if (is_email_invalid($signup_email)) {
         $errors["email_invalid"] = 'Invalid email, try again...';
      }
      if (is_user_taken($pdo, $signup_username)) {
         $errors["username_taken"] = 'Username already exist!';
      }
      if (is_email_registered($pdo, $signup_email)) {
         $errors["email_registered"] = 'E-mail is already registered...';
      }

      require_once '../config_session.inc.php';

      if ($errors) {
         $_SESSION['errors_signup'] = $errors;

         $signup_data = [
            "username" => $signup_username,
            "email" => $signup_email
         ];

         $_SESSION['signup_data'] = $signup_data;
         
         header ('Location: ../../index.php');
         die();
      }

      // CREATE USER QUERY
      create_user($pdo, $pwd, $signup_email, $signup_username);
      header("Location: ../../index.php?signup=success");

      $pdo = null;
      $stmt = null;

      die();

   } catch (PDOException $e) {
      die('Query error: ' . $e->getMessage());
   }
} else {
   header("Location: ../../index.php");
   die();
}
