<?php
include 'connect.php';
require_once 'includes/header.php';

showMessage("Welcome " . $_SESSION['username']);

function showMessage($message) {
  echo "
      <div id='message-box'>
        <p>$message</p>
      </div>
    ";

  echo "
      <script>
        setTimeout(function() {
          var messageBox = document.getElementById('message-box');
          if (messageBox) {
            messageBox.parentNode.removeChild(messageBox);
          }
        }, 3000);
      </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/message.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/logged_in.css" />
  <title>Accord</title>
</head>

<body>
  <?php
  $uname = $_SESSION['username'];

  $QUERY    = "SELECT * FROM tbluseraccount WHERE username='" . $uname . "'";

  $result   = mysqli_query($connection, $QUERY);
  $count    = mysqli_num_rows($result);
  $row      = mysqli_fetch_array($result);

  if ($row[4]  == "admin") {
    require_once "adminview.php";
  } else {
    require_once "userview.php";
  }
  ?>

</body>

</html>

<?php
if (isset($_POST['btnLogout'])) {
  session_destroy();
  header("location: index.php");
}
?>