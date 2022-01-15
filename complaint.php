<?php
include 'config.php';

$cmp=$_POST['cmp'];

$sql = "INSERT INTO complaint (complaint, reply)
VALUES ('$cmp','')";

mysqli_query($conn, $sql);
header('location:consumer.php');
?>