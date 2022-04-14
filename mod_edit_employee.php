<?php
  include "./inc/db_connect.php";
  if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $employee_id =  $_POST['employee_id'];
    $firstname =  $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenum = $_POST['phone'];
    $demployed = $_POST['demployed'];
    $estatus = $_POST['estatus'];
    $address = $_POST['address'];
    $state =  $_POST['state'];

    $sql = "UPDATE `employee_tb` SET `employee_id`='$employee_id', `first_name`='$firstname', `last_name`='$lastname', `phone`='$phonenum', `date_employed`='$demployed', `status`='$estatus', `address`='$address', `state`='$state' WHERE `id`='$id'";

    $result = $db_connect->query($sql);

    if ($result == TRUE) {
      header("Location: index.php");
    } else {
      echo "Error".$sql."<br>".$db_connect->error;
    }
  }

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `employee_tb` WHERE `id`='$id'";
    $result = $db_connect->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $employee_id =  $row['employee_id'];
        $firstname =  $row['first_name'];
        $lastname = $row['last_name'];
        $phonenum = $row['phone'];
        $demployed = $row['date_employed'];
        $estatus = $row['status'];
        $address = $row['address'];
        $state =  $row['state'];
        $id = $row['id'];
      }
    }
  }
?>