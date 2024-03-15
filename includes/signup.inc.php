<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$signup_username = $_POST['signup_username'];
$pwd = $_POST['pwd'];
$signup_email = $_POST['signup_email'];

try {
   require_once 'db_connection.inc.php';
   

} catch (PDOException $e) {
   die('Query error: ' . $e->getMessage());
}


} else {
   header("Location: ../index.php");
   die();
}