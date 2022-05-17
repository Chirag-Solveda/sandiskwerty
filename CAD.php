<?php 
include'1.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
       rel="stylesheet"
       integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
           crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
     <title>crud application in php</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="CAD.php">Hunting Goals</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">contact us</a>
              </li><li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              
              
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
       </div>
        </div>     </nav>
        <div class="container" my-4>
          <h1>Add your note here</h1>   
        <form action="insertintodatabase.php" method="POST">
          
              <div class="form-group">
                <label for="description"class="col-sm-2 col-form-label" >Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="title"  class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-2 col-form-label" ></div>
                <input type="text" name="title" class="form-control" >
                </div>
               
            </div>
         <div class="form-group">
                    <button value="button"  class="button" name ="button1">SUBMIT</button></div></form>
         </div>
        
       <div class="container">
       <table class="table table-striped" id="myTable">
      <tbody>
      </div>
<?php

$sql= "SELECT * FROM `inotes`";
$result= mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result)){

    echo"<tr>
    <th scope ='row'>". $row['sno'] ."</th>
      <td>". $row['description'] ."</td>
      <td>". $row['title'] ."</td>
      <td><a href=../project%202/delete.php?id=$row[sno] btn btn-sm btn-primary> delete </a> 
      <a href=../project%202/update.php?id=$row[sno]  btn btn-sm btn-primary>edit</a> </td>
    </tr>";
}
?>

 <thead>    
    <tr>
      <th scope="col">sno</th>
      <th scope="col">description</th>
      <th scope="col">title</th>
      <th scope="col">action</th>
    </tr>
  </thead>

  </tbody>
  <hr>
  <div class="container my-9"></div>
  </table><hr>
       </div> 
       
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
     integrity="sha256-/xUj+3OJU5yExlq6GGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
     
          <script>
         $(document).ready( function () {
         $('#myTable').DataTable(); }
          );
          </script>
 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
crossorigin="anonymous"></script>
    
    
  
  </body>
</html>