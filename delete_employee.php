<?php 
  include "./inc/db_connect.php";

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `employee_tb` WHERE `id`='$id'";
    $result = $db_connect->query($sql);
    if ($result == TRUE) {
      header("Location: dashboard.php");
    }
  }
?>