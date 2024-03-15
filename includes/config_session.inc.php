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

// below is a statement to regenrate a session ID every 30 mins
if(!isset($_SESSION['last_regeneration'])) {
   regenerate_id();
} else {
 $interval = 60 * 1;
 if (time() - $_SESSION['last_regeneration'] >= $interval) {
   regenerate_id();
 }
}

function regenerate_id() {
   session_regenerate_id(true);
   $_SESSION['last_regeneration'] = time();
}