<?php 
  include("./inc/db_connect.php");
  if (isset($_POST['signup'])) {
    $fname =  $_POST['fname'];
    $role =  $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass = md5($password);
    
    $sql = "INSERT INTO `users_tb` (`user_id`, `full_name`, `role`, `email`, `password`) VALUES (NULL, '$fname', '$role', '$email', '$pass')";

    $result = $db_connect->query($sql);

    if ($result == TRUE) {
      header("Location: index.php");
    } else {
      echo "Error:".$sql."<br>".$db_connect->error;
    }

    $db_connect->close();
  }
  
?>