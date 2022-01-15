<?php
  include_once 'config.php';
  session_start();
  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == '0') {
    header('location: index.php');
  }
?>

<?php
  $id = $_GET['id'];
  $res = mysqli_query($conn, "SELECT * FROM `biller` WHERE `id` = $id;");
  $sin = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="includes/style.css">
  <title>Edit Bill</title>
</head>
<body>
  <form action="includes/edit-bill.include.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="month">Month</label> <br/>
    <input type="text" name="month" id=""> <br/> <br>
    <label for="unit">Unit</label> <br/>
    <input type="text" name="unit" id=""> <br/> <br>
    <button name="update">Update</button> 
  </form>
</body>
</html>