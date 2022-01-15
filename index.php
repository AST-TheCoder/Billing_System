<?php
  session_start();

  if(!isset($_SESSION['userId'])) {
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="includes/style.css">
  <title>Index</title>
</head>
<body>
  <nav>
    <?php
      if($_SESSION['userRole'] == '1') {
        ?>
          <p class="container" style="text-align: center;">Do you want to redirect as Admin?</p>
          <form action="admin.php" class="container"><button>Yes</button></form>
          <form action="logout.php" class="container"><button>No</button></form>
        <?php
      }
    ?>
    <?php
      if($_SESSION['userRole'] == '2') {
        ?>
          <p class="container" style="text-align: center;">Do you want to redirect as Biller?</p>
          <form action="biller.php" class="container"><button>Yes</button></form>
          <form action="logout.php" class="container"><button>No</button></form>
        <?php
      }
    ?>
    <?php
      if($_SESSION['userRole'] == '3') {
        ?>
          <p class="container" style="text-align: center;">Do you want to redirect as Consumer?</p>
          <form action="consumer.php" class="container"><button>Yes</button></form>
          <form action="logout.php" class="container"><button>No</button></form>
        <?php
      }
    ?>
    <?php
      if($_SESSION['userRole'] == '4') {
        ?>
          <p class="container" style="text-align: center;">Do you want to redirect as Manager?</p>
          <form action="manager.php" class="container"><button>Yes</button></form>
          <form action="logout.php" class="container"><button>No</button></form>
        <?php
      }
    ?>
  </nav>
</body>
</html>