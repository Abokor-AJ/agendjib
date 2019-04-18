<?php
  $con = mysqli_connect("localhost","root","root");
  $db_select = mysqli_select_db("agendjib", $con);

  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
