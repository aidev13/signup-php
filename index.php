<?php
require_once 'includes/db_connection.inc.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/main.css">
   <title>Sign up today</title>
</head>

<body>
  
   <div class="custom-shape-divider-top-1710430193">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
         <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
   </div>

   <div class="custom-shape-divider-top-1710430194">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
         <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
   </div>

   <div class="center_it">
      
         <h3>Login</h3>
         <form action="" method="get" class="form_grid">
            <label for="login_username">Username:</label>
            <input type="text" id="login_username" placeholder="Username..." name="login_username">
            <label for="login_pwd">Password:</label>
            <input type="password" id="login_pwd" placeholder="Password..." name="login_pwd">
            <button>Login</button>
         </form>
     
   </div>

   <br>
   <br>

   <div class="center_it">
      
         <h3>Sign up</h3>
         <form action="" method="get" class="form_grid">
            <label for="signup_username">Username:</label>
            <input type="text" id="signup_username" placeholder="Enter a username..." name="signup_username">

            <label for="pwd">Password:</label>
            <input type="password" id="pwd" placeholder="Enter a password..." name="pwd">

            <label for="signup_email">Email:</label>
            <input type="text" id="signup_email" placeholder="Enter an email..." name="signup_email">
            <button>Sign up</button>

         </form>

   </div>
</body>

</html>