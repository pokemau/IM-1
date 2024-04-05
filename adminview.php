<?php
include 'connect.php';
require_once 'includes/header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/adminview.css" />
  <title>Accord</title>
</head>

<body>
  <h1>Users</h1>

  <?php
  $res = $connection->query("SELECT * FROM tbluserprofile") or
    die($connection->error);
  ?>

  <table id="users-table" class="table" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>id</th>
        <th>birthday</th>
        <th>username</th>
      </tr>
    </thead>

    <tbody>
      <?php
      while ($row = $res->fetch_assoc()) :
      ?>
        <tr>
          <td><?php echo $row['userid'] ?></td>
          <td><?php echo $row['birthday'] ?></td>
          <td><?php echo $row['displayname'] ?></td>

          <?php

          if ($row['displayname'] == "mau") {
            echo "
            <td>
              <a href=''>VIEW</a>
              ";
          } else {
          echo "
            <td>
              <a href=''>VIEW</a>
              
              <a href='delete.php?id=".$row['userid']."'>DELETE</a
            </td>
            ";

          }
          ?>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>


</body>

<footer>
  <p>Maurice R. Tañeca</p>
  <p>BSCS</p>
</footer>

</html>


<?php
$uname = $_SESSION['username'];


while ($row = $res->fetch_assoc()) {
}

if ($count > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "bday: " . $row["birthday"] . "username: " . $row["displayname"] . "<br>";
  }
}

?>