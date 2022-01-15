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
  <title>Reply</title>
</head>
<body>
  <form action="includes/reply.include.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="reply">Reply</label> <br/>
    <input type="text" name="reply" id="" value="<?php echo $sin['reply'] ?>"> <br/> <br>
    <button name="update">Submit</button> 
  </form>
</body>
</html>