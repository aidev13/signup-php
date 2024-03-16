<?php

declare(strict_types=1);

function is_input_empty(string $signup_username, string $pwd, string $signup_email)
{
   if (empty($signup_username) || empty($pwd) || empty($signup_email)) {
      return true;
   } else {
      return false;
   }
}

function is_email_invalid(string $signup_email)
{
   if (!filter_var($signup_email, FILTER_VALIDATE_EMAIL)) {
      return true;
   } else {
      return false;
   }
}

function is_user_taken(object $pdo, string $signup_username)
{
   if (get_username($pdo, $signup_username)) {
      return true;
   } else {
      return false;
   }
}

function is_email_registered(object $pdo, string $signup_email)
{
   if (get_email($pdo, $signup_email)) {
      return true;
   } else {
      return false;
   }
}

function create_user(object $pdo, string $pwd, string $signup_email, string $signup_username)
{
   set_user($pdo, $pwd, $signup_email, $signup_username);
}
