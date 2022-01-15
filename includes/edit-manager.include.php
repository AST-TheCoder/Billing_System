<?php
  session_start();
  include_once '../config.php';

  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == 0) {
    header('location: ../index.php');
  }

  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  mysqli_query($conn, "UPDATE `manager` SET `name` = '$name', `email` = '$email' WHERE `id` = $id;");

  header('location: ../admin.php');
?>