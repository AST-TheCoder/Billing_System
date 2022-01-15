<?php
  session_start();

  include '../config.php';

  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $chk=0;

  $res = mysqli_query($conn, "SELECT * FROM `admin` WHERE `email` = '$email' AND `pwd` = '$pwd';");

  if(mysqli_num_rows($res)) {
    $admin = mysqli_fetch_assoc($res);
    $_SESSION['userId'] = $admin['id'];
    $_SESSION['userRole'] = '1';
    header('location: ../index.php');
    $chk=1;
  }

  
  $res = mysqli_query($conn, "SELECT * FROM `biller` WHERE `email` = '$email' AND `pwd` = '$pwd';");

  if(mysqli_num_rows($res)) {
    $biller = mysqli_fetch_assoc($res);
    $_SESSION['userId'] = $biller['id'];
    $_SESSION['userRole'] = '2';
    header('location: ../index.php');
    $chk=1;
  }


  $res = mysqli_query($conn, "SELECT * FROM `consumer` WHERE `email` = '$email' AND `pwd` = '$pwd';");

  if(mysqli_num_rows($res)) {
    $consumer = mysqli_fetch_assoc($res);
    $_SESSION['userId'] = $consumer['id'];
    $_SESSION['userRole'] = '3';
    header('location: ../index.php');
    $chk=1;
  }


  $res = mysqli_query($conn, "SELECT * FROM `manager` WHERE `email` = '$email' AND `pwd` = '$pwd';");

  if(mysqli_num_rows($res)) {
    $manager = mysqli_fetch_assoc($res);
    $_SESSION['userId'] = $manager['id'];
    $_SESSION['userRole'] = '4';
    header('location: ../index.php');
    $chk=1;
  }

  if($chk==0){
    header('location: ../login.php');
  }
?>