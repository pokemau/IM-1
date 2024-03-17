<?php
  $connection = new mysqli('localhost', 'root','','dbtanecaf2');

  if (!$connection) {
    die (mysqli_error($mysqli));
  }
?>