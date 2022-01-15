<?php
include '../config.php';

$name = $_POST['name'];
$mid = $_POST['mid'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO apply (name, mid, email, pwd)
VALUES ('$name', $mid, '$email', '$pwd')";

mysqli_query($conn, $sql);
header('location:../login.php');
?>