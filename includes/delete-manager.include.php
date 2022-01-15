<?php
  include_once '../config.php';
  session_start();
  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == '0') {
    header('location: ../index.php');
  }  

  $id = $_GET['id'];

  mysqli_query($conn, "DELETE FROM manager WHERE `id` = $id;");
  header('location: ../admin.php');
?>