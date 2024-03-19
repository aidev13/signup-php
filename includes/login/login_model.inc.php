<?php

declare(strict_types=1);

function get_user(object $pdo, string $signup_username)
{
   $query = "SELECT * FROM users WHERE username = :username;";
   $stmt = $pdo->prepare($query);
   $stmt->bindParam(":username", $signup_username);
   $stmt->execute();

   $result = $stmt->fetch(PDO::FETCH_ASSOC);

   return $result;
};
