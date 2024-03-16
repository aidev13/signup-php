<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   $userrname = $_POST['username'];
   $pwd = $_POST['pwd'];

   try {
      
   } catch (PDOException $e) {
      die('Query error: ' . $e->getMessage());
   }
} else {
   header("Location: ../index.php");
   die();
}
