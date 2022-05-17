<?php
include'1.php';




if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['button1']))

{
   $tit=$_POST["title"];
   $desc=$_POST["description"];
$sql11="INSERT INTO `inotes`(`title`,`description`) values ('$tit','$desc')";

$result=mysqli_query($con,$sql11);

if($result){
    echo"the result has been added successfully";
    }
    else{echo"record not inserted succesfully".mysqli_error($con);
    }
}}

header('location:CAD.php');
?>

