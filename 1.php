<?php 
$con = mysqli_connect("localhost","root","root","chirag");

// Check connection

if (!$con) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>