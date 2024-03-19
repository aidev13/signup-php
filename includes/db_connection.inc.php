<?php

$dsn = 'mysql:host=127.0.0.1;dbname=phplogin_db';
$db_username = 'root';
$db_password = '';

try {
   $pdo = new PDO($dsn, $db_username, $db_password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "&#x2705";
} catch (PDOException $e) {
   echo "&#x274c ";
   die("Connection Failed: " . $e->getMessage());
}