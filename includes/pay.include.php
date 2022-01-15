<?php
  session_start();
  include_once '../config.php';

  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == 0) {
    header('location: ../index.php');
  }

  $id = $_GET['id'];

  mysqli_query($conn, "UPDATE `consumer` SET `paystat`='Paid' WHERE `id` = $id;");

  header('location: ../consumer.php');
?>