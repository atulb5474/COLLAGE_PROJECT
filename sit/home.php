<?php
session_start();
$name=$_SESSION['name'];
$photo=$_SESSION['photo'];
$id=$_SESSION['id'];
include('db.php');
//error_reporting(0);
//if($name==0)
//{
 // echo"<script>alert('please login to access')
 // window.location='index.php'</script>";
//}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body  >
    <div class="container-fluid text-white h1 py-5 text-center"><image src="image/download.png" style="width:100%; height:130px; box-shadow: 0 15px 25px rgba(0,0,0,.6);border-radius:10px;"></div>
    <div class="container bg-primary">
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active text-white fw-bold" aria-current="page" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white fw-bold" href="placement.php">Upload Placement Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white fw-bold" href="feedback.php">Upload Notice</a>
  </li>
  <li class="nav-item">
    <a class ="nav-link text-white fw-bold" href="logout.php">Logout </li>
</ul>
      
    </div>
    <div class="container my-4">
    <div class="col-md-4 offset-md-4 p-2 border text-center">
    <img src="profile/<?php echo $photo?>" class="rounded-circle img-fluid" style="height:400px;width:400px;">
   <h3 ><?php echo $name ?></h3>
   <a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
    </div>

</div></div>
    <div class="container-fluid bg-primary text-white h5 py-2 text-center">&copy Designed by Deepak Kumar</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>