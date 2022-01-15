<?php
  session_start();
  include_once '../config.php';

  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == 0) {
    header('location: ../index.php');
  }

  $id = $_POST['id'];
  $name = $_POST['month'];
  $unit = $_POST['unit'];

  $bill=0;
  $temp=$unit;

  if($unit>500){
    $bill=$bill+($unit-500)*7;
    $unit=500;
  }
  if($unit>300){
    $bill=$bill+($unit-300)*5;
    $unit=300;
  }
  if($unit>100){
    $bill=$bill+($unit-100)*4;
    $unit=100;
  }
  if($unit>0){
    $bill=$bill+($unit-0)*3.5;
    $unit=0;
  }

  mysqli_query($conn, "UPDATE `consumer` SET `month` = '$name', `unit` = '$temp', `bill`='$bill', `paystat`='Not Paid' WHERE `id` = $id;");

  header('location: ../biller.php');
?>