<?php

include 'Query.php';
include 'Validator.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = new Query(); // named parameter only in php 8

$query->addDataToUsers($name, $email, $password);

session_start();
$_SESSION['alert'] = "Data has been added to table.";

header('location: loginForm.php');
