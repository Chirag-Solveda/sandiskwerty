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
     <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
     <title>crud application in php</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../project%202/CAD.php#">Hunting Goals</a>
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
            
            </form>
       </div>
        </div>     </nav>
        <div class="container" my-4>
          <h1>EDIT YOUR NOTE</h1>  
        <form action="" method="POST">
              <div class="form-group">
            
              <?php
          include'1.php';
          $ids = $_GET['id'];
        
        
          $s= " SELECT `title` ,`description` FROM `inotes` where `sno`={$ids}"; 
        
          $result1=mysqli_query($con,$s);
        
          $array1=mysqli_fetch_assoc($result1);
          foreach($array1 as $values){
          }
                 
?>

              <label for="description"class="col-sm-2 col-form-label" >Description</label>
                <textarea class="form-control" value =""  name="description" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="title"  class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-2 col-form-label" ></div>
                <input type="text" name="title" value="" class="form-control" >
                </div>
               
            </div>
         <div class="form-group">
                    <button value="button"  class="button" name ="button2">F-SUBMIT</button></div></form>
         </div>
         <?php
           include'1.php';
           $ids = $_GET['id'];
        if(isset($_POST['button2']))
           
        {
         $titu=$_POST["title"];
         $descu=$_POST["description"];
        $sql="UPDATE `inotes` SET `title`='$titu' , `description` ='$descu' where  sno={$ids}";
        
        $result=mysqli_query($con,$sql);
        
        }       
      
       
       ?> 


         </body>
</html>