<?php
if(isset($_POST[`button1`])){

$des=$_POST['description'];
$tit=$_POST['title'];
$query="INSERT INTO `inotes`( `description`,`title`) VALUES
                        ('$des','$tit')";

 $result=mysqli_query($con,$query);                        

if($result)
{
?>
<script>
    alert("data inserted");
</script>
<?php
}
include'htf.php';
}echo"this is also junk file";
?>