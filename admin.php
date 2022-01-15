<?php
  include_once 'config.php';
  session_start();
  if(!isset($_SESSION['userId']) || $_SESSION['userRole'] == '0') {
    header('location: index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="includes/style.css">
  <title>Admin</title>
  <style>
    table {
      border-collapse: collapse;
      table-layout: fixed;
      background-color: yellowgreen;
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
  <p class="container" style="text-align: center; padding-bottom: 10px;"><b>Admin</b></p>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Edition</th>
      </tr>
    </thead>
    <tbody>
      <?php while($admin = mysqli_fetch_assoc($alladmins)) { ?>
        <tr>
          <td><?php echo $admin['id'] ?></td>
          <td><?php echo $admin['name'] ?></td>
          <td><?php echo $admin['email'] ?></td>
          <td>
            <a href="edit-admin.php?id=<?php echo $admin['id'] ?>">Edit</a>
            <a href="includes/delete-admin.include.php?id=<?php echo $admin['id'] ?>">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <br><br><br>


  <?php
    $allbillers = mysqli_query($conn, "SELECT * FROM `biller`");
  ?>
  <p class="container" style="text-align: center;padding-bottom: 10px;"><b>Biller</b></p>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Edition</th>
      </tr>
    </thead>
    <tbody>
      <?php while($biller = mysqli_fetch_assoc($allbillers)) { ?>
        <tr>
          <td><?php echo $biller['id'] ?></td>
          <td><?php echo $biller['name'] ?></td>
          <td><?php echo $biller['email'] ?></td>
          <td>
            <a href="edit-biller.php?id=<?php echo $biller['id'] ?>">Edit</a>
            <a href="includes/delete-biller.include.php?id=<?php echo $biller['id'] ?>">Delete</a>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>

  <?php
    $allmanagers = mysqli_query($conn, "SELECT * FROM `manager`");
  ?>
  <p class="container" style="text-align: center;padding-bottom: 10px;"><b>Manager</b></p>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Edition</th>
      </tr>
    </thead>
    <tbody>
      <?php while($manager = mysqli_fetch_assoc($allmanagers)) { ?>
        <tr>
          <td><?php echo $manager['id'] ?></td>
          <td><?php echo $manager['name'] ?></td>
          <td><?php echo $manager['email'] ?></td>
          <td>
            <a href="edit-manager.php?id=<?php echo $manager['id'] ?>">Edit</a>
            <a href="includes/delete-manager.include.php?id=<?php echo $manager['id'] ?>">Delete</a>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>

  <?php
    $allconsumers = mysqli_query($conn, "SELECT * FROM `consumer`");
  ?>
  <p class="container" style="text-align: center;padding-bottom: 10px;"><b>Consumer</b></p>
  <table style="table-layout: auto;">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Meter No</th>
        <th>Unit</th>
        <th>Month</th>
        <th>Bill</th>
        <th>Payment Status</th>
        <th>Edition</th>
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
          <td><?php echo $consumer['month'] ?></td>
          <td><?php echo $consumer['bill'] ?></td>
          <td><?php echo $consumer['paystat'] ?></td>
          <td>
            <a href="edit-consumer.php?id=<?php echo $consumer['id'] ?>">Edit</a>
            <a href="includes/delete-consumer.include.php?id=<?php echo $consumer['id'] ?>">Delete</a>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>
  <?php
    $allconsumers = mysqli_query($conn, "SELECT * FROM `apply`");
  ?>
  <p class="container" style="text-align: center;padding-bottom: 10px;"><b>Applications</b></p>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Meter No</th>
        <th>Edition</th>
      </tr>
    </thead>
    <tbody>
      <?php while($consumer = mysqli_fetch_assoc($allconsumers)) { ?>
        <tr>
          <td><?php echo $consumer['id'] ?></td>
          <td><?php echo $consumer['name'] ?></td>
          <td><?php echo $consumer['email'] ?></td>
          <td><?php echo $consumer['mid'] ?></td>
          <td>
            <a href="includes/add-consumer.include.php?id=<?php echo $consumer['id'] ?>">Add</a>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>
  <?php
    $allconsumers = mysqli_query($conn, "SELECT * FROM `complaint`");
  ?>
  <p class="container" style="text-align: center;padding-bottom: 10px;"><b>Complaints</b></p>
  <table style="table-layout: auto;">
    <thead>
      <tr>
        <th>ID</th>
        <th>Complaint</th>
        <th>Reply</th>
        <th>Edition</th>
      </tr>
    </thead>
    <tbody>
      <?php while($consumer = mysqli_fetch_assoc($allconsumers)) { ?>
        <tr>
          <td><?php echo $consumer['id'] ?></td>
          <td><?php echo $consumer['complaint'] ?></td>
          <td><?php echo $consumer['reply'] ?></td>
          <td>
            <a href="reply.php?id=<?php echo $consumer['id'] ?>">Reply</a>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>
  <form action="logout.php"><button>Log out</button></form>
</body>
</html>