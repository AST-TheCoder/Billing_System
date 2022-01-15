<?php
  include_once 'config.php';
  session_start();
  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == '0') {
    header('location: index.php');
  }
?>

<?php
  $id = $_GET['id'];
  $res = mysqli_query($conn, "SELECT * FROM `manager` WHERE `id` = $id;");
  $sin = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="includes/style.css">
  <title>Edit Manager</title>
</head>
<body>
  <form action="includes/edit-manager.include.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="name">Name</label> <br/>
    <input type="text" name="name" id="" value="<?php echo $sin['name'] ?>"> <br/> <br>
    <label for="email">Email</label> <br/>
    <input type="text" name="email" id="" value="<?php echo $sin['email'] ?>"> <br/> <br>
    <button name="update">Update</button> 
  </form>
</body>
</html>