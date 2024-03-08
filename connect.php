<?php
  $connection = new mysqli('localhost', 'root','','dbtañecaf2');

  if (!$connection) {
    die (mysqli_error($mysqli));
  }

?>