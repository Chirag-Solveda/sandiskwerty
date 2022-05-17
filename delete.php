<?php
include'1.php';

$ids=$_GET['id'];
$sqlq="DELETE FROM `inotes` WHERE `sno`={$ids}";
$query=mysqli_query($con,$sqlq);

header('location:CAD.php');



?>