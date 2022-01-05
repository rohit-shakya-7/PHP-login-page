<?php

class Query{

  private $con, $database; // class variable
  public function __construct($host = 'localhost', $database = 'loginandregister', $username = 'root', $password='')
  {
    $this->con = new PDO("mysql:host=".$host.";dbname=".$database, $username, $password);
    $this->database = $database;
  }

  public function addDataToUsers($name, $email, $password){
    $pwd = password_hash($password, PASSWORD_DEFAULT); // constant value 
    $sql_query = "INSERT INTO $this->database.users (name, email, password) VALUES ('$name', '$email', '$pwd')";
    $this->con->exec($sql_query);
  }

  public function fetchUser($email) {
    $sql_query = "SELECT * FROM $this->database.users WHERE email = '$email'";
    $stmt = $this->con->query($sql_query); // execution process
    $user = $stmt->fetch(PDO::FETCH_OBJ); // fetching
    return $user; // null
  }

}