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
  <title>Consumer</title>
  <style>
    table {
      border-collapse: collapse;
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
        <th>Month</th>
        <th>Bill</th>
        <th>Payment status</th>
        <th>Edition</th>
      </tr>
    </thead>
    <tbody>
      <?php while($consumer = mysqli_fetch_assoc($allconsumers)) { ?>
        <?php if($_POST['mid'] == $consumer['mid']) { ?>
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
              <a href="includes/pay.include.php?id=<?php echo $consumer['id'] ?>">Pay</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>

  <?php
    $allconsumers = mysqli_query($conn, "SELECT * FROM `complaint`");
  ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Complaints</th>
        <th>Replies</th>
      </tr>
    </thead>
    <tbody>
      <?php while($consumer = mysqli_fetch_assoc($allconsumers)) { ?>
        
          <tr>
            <td><?php echo $consumer['id'] ?></td>
            <td><?php echo $consumer['complaint'] ?></td>
            <td><?php echo $consumer['reply'] ?></td>
          </tr>
        
      <?php } ?>

    </tbody>
  </table>
  <br><br><br>
  <form action="logout.php"><button>Log out</button></form>
</body>
</html>