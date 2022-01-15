<?php
  include_once 'config.php';
  session_start();
  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == '0') {
    header('location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="includes/style.css">
  <title>Manager</title>
  <style>
    table {
      border-collapse: collapse;
      background-color: yellowgreen;
      table-layout: fixed;
    }

    table tr,
    table th,
    table td {
      border: 1px solid rgba(0, 0, 0, .3);
    }

    table td {
      padding: 5px;
    }
  </style>
</head>
<body>
  <?php
    $alladmins = mysqli_query($conn, "SELECT * FROM `admin`");
  ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php while($admin = mysqli_fetch_assoc($alladmins)) { ?>
        <tr>
          <td><?php echo $admin['id'] ?></td>
          <td><?php echo $admin['name'] ?></td>
          <td><?php echo $admin['email'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <br><br><br>


  <?php
    $allbillers = mysqli_query($conn, "SELECT * FROM `biller`");
  ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php while($biller = mysqli_fetch_assoc($allbillers)) { ?>
        <tr>
          <td><?php echo $biller['id'] ?></td>
          <td><?php echo $biller['name'] ?></td>
          <td><?php echo $biller['email'] ?></td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>

  <?php
    $allmanagers = mysqli_query($conn, "SELECT * FROM `manager`");
  ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php while($manager = mysqli_fetch_assoc($allmanagers)) { ?>
        <tr>
          <td><?php echo $manager['id'] ?></td>
          <td><?php echo $manager['name'] ?></td>
          <td><?php echo $manager['email'] ?></td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>

  <?php
    $allconsumers = mysqli_query($conn, "SELECT * FROM `consumer`");
  ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Meter No</th>
        <th>Unit</th>
      </tr>
    </thead>
    <tbody>
      <?php while($consumer = mysqli_fetch_assoc($allconsumers)) { ?>
        <tr>
          <td><?php echo $consumer['id'] ?></td>
          <td><?php echo $consumer['name'] ?></td>
          <td><?php echo $consumer['email'] ?></td>
          <td><?php echo $consumer['mid'] ?></td>
          <td><?php echo $consumer['unit'] ?></td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>
  <form action="logout.php"><button>Log out</button></form>
</body>
</html>