<?php  
  session_start(); 
  include("./inc/db_connect.php");

  $email = $_POST['email'];
  $password = $_POST['password'];
  $password = md5($password);

  if (empty($email)) {
    header("Location: index.php");
  } else if (empty($password)) {
    header("Location: index.php");
  } else {
    $sql = "SELECT * FROM `users_tb` WHERE `email`='$email' AND `password`='$password'";
    $result = $db_connect->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        if ($row['email'] === $email && $row['password'] === $password) {
          $_SESSION['email'] = $row['email'];
          $_SESSION['full_name'] = $row['fname'];
          $_SESSION['user_id'] = $row['user_id'];
    
          header("Location: dashboard.php");
        } else {
          echo "Invalid email and password";  
        }
      }
    } else {
      echo "Invalid email and password";
    }
  }
?>
