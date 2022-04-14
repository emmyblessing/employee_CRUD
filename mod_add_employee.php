<?php 
  include("./inc/db_connect.php");
  if (isset($_POST['submit'])) {
    $employee_id =  $_POST['employee_id'];
    $firstname =  $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenum = $_POST['phonenum'];
    $demployed = $_POST['demployed'];
    $estatus = $_POST['estatus'];
    $address = $_POST['address'];
    $state =  $_POST['state'];
    
    $sql = "INSERT INTO `employee_tb` (`id`, `employee_id`, `first_name`, `last_name`, `phone`, `date_employed`, `status`, `address`, `state`) VALUES (NULL, '$employee_id', '$firstname', '$lastname', '$phonenum', '$demployed', '$estatus', '$address', '$state')";

    $result = $db_connect->query($sql);

    if ($result == TRUE) {
      header("Location: index.php");
    } else {
      echo "Error:".$sql."<br>".$db_connect->error;
    }

    $db_connect->close();
  }
  
?>