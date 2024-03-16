<?php
declare(strict_types=1);

function signup_inputs()
{

   if (isset($_SESSION['signup_data']['username']) && !isset($_SESSION['errors_signup']['username_taken'])) {
      echo
      '<label for="signup_username">Username:</label>
      <input type="text" id="signup_username" placeholder="Enter a username..." name="signup_username" value="'. $_SESSION['signup_data']['username'] .'">';
      unset($_SESSION['signup_data']['username']);
   } else {
      echo
      '<label for="signup_username">Username:</label>
      <input type="text" id="signup_username" placeholder="Enter a username..." name="signup_username">';
   }

   echo 
   '<label for="pwd">Password:</label>
   <input type="password" id="pwd" placeholder="Enter a password..." name="pwd">';
   

   if (isset($_SESSION['signup_data']['email']) && !isset($_SESSION['errors_signup']['email_registered']) && !isset($_SESSION['errors_signup']['is_email_invalid'])) {
      echo 
      '<label for="signup_email">Email:</label>
      <input type="text" id="signup_email" placeholder="Enter an email..." name="signup_email" value="'. $_SESSION['signup_data']['email'] .'">';
      unset($_SESSION['signup_data']['email']);
   } else {
      echo 
      '<label for="signup_email">Email:</label>
      <input type="text" id="signup_email" placeholder="Enter a email..." name="signup_email">';
   }
}

function check_signup_errors()
{
   if (isset($_SESSION['errors_signup'])) {
      $errors = $_SESSION['errors_signup'];

      echo "<br>";
      foreach ($errors as $error) {
         echo '<p class="form_error">' . $error . '</p>';
      }

      unset($_SESSION['errors_signup']);
   } else if (isset($_GET['signup']) && $_GET['signup'] === 'success') {
      echo '<br>';
      echo '<p class="form_success">You are signed up!</p>';
   }
}

