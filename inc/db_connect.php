<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "employee_db";

$db_connect = mysqli_connect(
  $host, 
  $user, 
  $password, 
  $database) or 
  ("Could not connect database");
?>