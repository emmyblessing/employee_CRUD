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


    $target_dir = "uploads/";
    $uimage = $target_dir . basename($_FILES["uimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($uimage,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["employee_image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($uimage)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["employee_image"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["employee_image"]["tmp_name"], $uimage)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["employee_image"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }


    }
    
    $sql = "INSERT INTO `employee_tb` (`id`, `employee_id`, `first_name`, `last_name`, `phone`, `date_employed`, `status`, `address`, `state`, `employee_image`) VALUES (NULL, '$employee_id', '$firstname', '$lastname', '$phonenum', '$demployed', '$estatus', '$address', '$state', '$uimage')";

    $result = $db_connect->query($sql);

    if ($result == TRUE) {
      header("Location: index.php");
    } else {
      echo "Error:".$sql."<br>".$db_connect->error;
    }

    $db_connect->close();
  }
  
?>