
<?php
include'1.php';
$ids=$_GET['sno'];

$showquery="SELECT * FROM `inotes` where sno={ids}"
$showdata =mysqli_query($con,$showquery);
$arraydata=mysqli_fetch_assoc($showdata);



$sql= "SELECT * FROM `inotes`";
$result= mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){

    echo"<tr>
    <th scope='row'>". $row['sno'] ."</th>
      <td>". $row['title'] ."</td>
      <td>". $row ['description'] ."</td>
      <td>actions</td>
    </tr>";
}
echo"this is a query junk file";
?>







