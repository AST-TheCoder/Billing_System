<?php
  session_start();
  include_once '../config.php';

  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == 0) {
    header('location: ../index.php');
  }

  $id=$_POST['id'];
  $reply=$_POST['reply'];

  mysqli_query($conn, "UPDATE `complaint` SET `reply` = '$reply' WHERE `id` = $id;");

  header('location: ../admin.php');
?>