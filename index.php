<?php
require_once 'includes/db_connection.inc.php';
require_once 'includes/signup/signup_view.inc.php';
require_once 'includes/config_session.inc.php';
// var_dump($_SERVER['REQUEST_METHOD'] === 'POST');
require_once 'includes/login/login_view.inc.php';

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

   <div class="nav_placement">
      <nav class='navbar'>
         <form action="includes/logout/logout.inc.php">
            <button class="logoutBtn">Log out</button>
         </form>
      </nav>
   </div>

   <h3>
      <?php
      output_username();
      ?>
   </h3>

   <div class="custom-shape-divider-top-1">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
         <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
   </div>

   <div class="custom-shape-divider-top-2">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
         <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
   </div>

   <div class="custom-shape-divider-top-3">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
         <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
   </div>

   <div class="center_it">
      <h3>Login</h3>
      <form action="includes/login/login.inc.php" method="get" class="form_grid">
         <label for="username">Username:</label>
         <input type="text" id="username" placeholder="Username..." name="username">
         <label for="login_pwd">Password:</label>
         <input type="password" id="login_pwd" placeholder="Password..." name="pwd">
         <button>Login</button>
      </form>
   </div>

   <?php
   check_login_errors();
   ?>

   <br>
   <br>

   <div class="center_it">
      <h3>Sign up</h3>
      <form action="includes/signup/signup.inc.php" method="post" class="form_grid">
         <?php
         signup_inputs();
         ?>
         <button>Sign up</button>

      </form>
   </div>

   <?php
   check_signup_errors();
   ?>

</body>

</html>