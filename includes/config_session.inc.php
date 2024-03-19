<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([ // setting cookie parameters
   'lifetime' => 1800,
   'domain' => 'localhost',
   'path' => '/',
   'secure' => true,
   'httponly' => true
]);

session_start();

if (isset($_SESSION['user_id'])) {
   if (!isset($_SESSION['last_regeneration'])) {
      regenerate_id_loggged_in();
   } else {
      $interval = 60 * 1;
      if (time() - $_SESSION['last_regeneration'] >= $interval) {
         regenerate_id_loggged_in();
      }
   }
} else {
   if (!isset($_SESSION['last_regeneration'])) {
      regenerate_id();
   } else {
      $interval = 60 * 1;
      if (time() - $_SESSION['last_regeneration'] >= $interval) {
         regenerate_id();
      }
   }
}

function regenerate_id_loggged_in()
{
   session_regenerate_id(true);
   $user_id = $_SESSION['user_id'];
   $new_session_id = session_create_id();
   $session_id = $new_session_id . '_' . $user_id;
   session_id($session_id);
   $_SESSION['last_regeneration'] = time();
}

function regenerate_id()
{
   session_regenerate_id(true);
   $_SESSION['last_regeneration'] = time();
}
