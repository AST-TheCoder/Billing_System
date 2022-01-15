<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="includes/style.css">
  <title>Application</title>
</head>
<body>
  <form action="includes/applyform.include.php" method="POST" class="container">
    <label for="name">Name</label><br>
    <input type="text" name="name" id="" placeholder="Enter your name">
    <br><br>
    <label for="mid">Meter No</label><br>
    <input type="text" name="mid" id="" placeholder="Enter your meter No">
    <br><br>
    <label for="email">Email</label><br>
    <input type="text" name="email" id="" placeholder="Enter your email">
    <br><br>
    <label for="pwd">Password</label><br>
    <input type="text" name="pwd" id="" placeholder="Enter your password">
    <br><br>
    <button name="apply">Apply</button><br><br>
  </form>
  <form action="login.php" class="container"><button>Log in</button></form>
</body>
</html>