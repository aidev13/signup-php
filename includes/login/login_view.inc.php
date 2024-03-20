<?php

declare(strict_types=1);

function check_login_errors()
{
   if (isset($_SESSION['errors_login'])) {
      $errors = $_SESSION['errors_login'];

      echo "<br>";
      foreach ($errors as $error) {
         echo '<p class="form_error">' . $error . '</p>';
         unset($_SESSION['errors_login']);
      }
   }
   else if(isset($GET['login']) && $_GET['login'] === "success"){
      echo '<br>';
      echo '<p class="form_success">Login Success, Welcome Back!</p>';
   }
}


function output_username() {
   if (isset($_SESSION['user_id'])) {
      echo 'Hello ' . $_SESSION['user_username'] . '!';
   } else {
      echo 'Login to get started';
   }
}