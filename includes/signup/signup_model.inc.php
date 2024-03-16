<?php

declare(strict_types=1);

function get_username(object $pdo, string $signup_username)
{
   $query = "SELECT username FROM users WHERE username = :username;";
   $stmt = $pdo->prepare($query);
   $stmt->bindParam(":username", $signup_username);
   $stmt->execute();

   $result = $stmt->fetch(PDO::FETCH_ASSOC);

   return $result;
}

function get_email(object $pdo, string $signup_email)
{
   $query = "SELECT email FROM users WHERE email = :email;";
   $stmt = $pdo->prepare($query);

   $stmt->bindParam(":email", $signup_email);
   $stmt->execute();

   $result = $stmt->fetch(PDO::FETCH_ASSOC);

   return $result;
}

function set_user(object $pdo, string $pwd, string $signup_email, string $signup_username)
{
   $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
   $stmt = $pdo->prepare($query);


   /* -- hashing password -- */
   $options = [
      'cost' => 12
   ];

   $hashed_pwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
 
   /* -- hashing password END-- */

   $stmt->bindParam(":username", $signup_username);
   $stmt->bindParam(":pwd", $hashed_pwd);
   $stmt->bindParam(":email", $signup_email);
   $stmt->execute();
}
