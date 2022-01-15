<?php
  include_once '../config.php';
  session_start();
  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == '0') {
    header('location: ../index.php');
  }  

  $id = $_GET['id'];

  $chk = mysqli_query($conn, "SELECT * FROM apply WHERE id = $id;");

  mysqli_query($conn, "DELETE FROM apply WHERE id = $id;");
  $temp = mysqli_query($conn,"SELECT * FROM consumer");

  $user=mysqli_fetch_assoc($chk);
  $id=mysqli_num_rows($temp)+1;
  $name=$user['name'];
  $email=$user['email'];
  $pwd=$user['pwd'];
  $mid=$user['mid'];
  mysqli_query($conn, "INSERT INTO consumer (id, name, email, pwd, mid, unit, month, bill, paystat) VALUES ('$id','$name','$email','$pwd','$mid',0,'NONE',0,'NONE');");
  header('location: ../admin.php');
?>