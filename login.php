<?php

include 'Query.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = new Query();

if($user = $query->fetchUser($email)) {
  if(password_verify($password, $user->password)) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['current_user'] = $user;
    header('location:home.php');

  } else {
    echo "Incorrect password";
  }
} else {
  echo "User not found";
}

