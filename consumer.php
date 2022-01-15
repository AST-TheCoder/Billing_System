<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="includes/style.css">
  <title>Meter No</title>
</head>
<body>
  <form action="showbill.php" method="POST">
    <label for="mid">Meter No</label><br>
    <input type="text" name="mid" id="" placeholder="Meter No.">
    <br><br>
    <button name="login">Submit</button><br><br>
  </form>
  <form action="complaint.php" method="POST">
    <label for="cmp">Complaint</label><br>
    <input type="text" name="cmp" id="" placeholder="Complaint">
    <br><br>
    <button name="login">Submit</button><br><br>
  </form>
  <form action="logout.php"><button>Log out</button></form>
</body>
</html>