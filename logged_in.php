<?php
include 'connect.php';
require_once 'includes/header.php';
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


  <div id="loggedin-cont">
    <?php
    echo "
        <div>
          <h1>Hello {$_SESSION['username']}</h1>
        </div>
      ";
    ?>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet mollitia quod veniam consequuntur harum vel et dolore quas. Necessitatibus, exercitationem ipsa sint iure facilis ratione libero hic animi error! Exercitationem laboriosam voluptates inventore provident quidem cupiditate. Qui neque praesentium possimus ipsa aperiam accusantium eligendi. Doloribus corporis voluptates molestias ipsam porro qui architecto, exercitationem odit recusandae fuga enim voluptatum illum nam, fugit ratione ullam animi sequi. Possimus porro nulla vel voluptatum alias facere consequatur assumenda laboriosam quasi ad inventore impedit fugit eum mollitia excepturi quidem corporis, error ab corrupti sequi veritatis distinctio accusantium velit fugiat. Fuga ipsa vero excepturi quis aliquid, aut debitis odit veniam provident, amet architecto soluta voluptates nostrum asperiores totam iure a non magni corrupti. Illo quis cumque consequatur doloribus. Voluptates blanditiis consequatur eaque, impedit enim, incidunt quis quae necessitatibus corrupti dicta odio mollitia alias nemo expedita et minima earum eum optio qui quidem quia! Exercitationem, dolorum rerum amet eveniet voluptas odio, quaerat, maxime repellendus consequuntur itaque corrupti dolores autem consectetur temporibus qui iste. Nisi veritatis maiores deserunt ducimus quisquam velit neque itaque sint laborum adipisci vero distinctio nobis, fugiat iusto quia quasi harum possimus fugit ullam vitae. Obcaecati earum quis officia, porro eaque est culpa veniam magnam.</h1>

    <form method="post">
      <div>
        <input type="submit" name="btnLogin" value="Logout">
      </div>
    </form>

  </div>

</body>

</html>

<?php

if (isset($_POST['btnLogin'])) {
  session_destroy();
  header("location: index.php");
}



?>