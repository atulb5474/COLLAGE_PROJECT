<?php
session_start();
$name=$_SESSION['name'];
$photo=$_SESSION['photo'];
$id=$_SESSION['id'];
include('db.php');

if($_SERVER['REQUEST_METHOD']=="POST")
{
  //for posting value
  $name=$_POST['name'];
 
 
  $photo=$_FILES['photo']['name'];
  move_uploaded_file($_FILES['photo']['tmp_name'],"picture/$photo");
  
  $password=$_POST['password'];
  //inserting value
  $ins="insert into notice(name,photo,datetime) 
  values('$name','$photo',now())";
  $status=mysqli_query($con,$ins);
if($status)
{
  echo"<script>alert('Succesfully sent!')
  window.location='feedback.php'</script>";
}
else{
  echo"<script>alert('fails')
  window.location='feedback.php'</script>";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
 <style>
  .bg-custom
  {
    background:white;
  }
  button
  {background: linear-gradient(90deg, transparent, #03e9f4);
  width:200px;
  height:60px;
  }
  button:hover
  {
    background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;

  }
 

 </style>
  </head>
  

  <body  style="background-image: url('image/animation2.gif');">

  
  <image src="image/download.png" style="width:100%; height:130px; box-shadow: 0 15px 25px rgba(0,0,0,.6);border-radius:10px;">

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
 
</ul>
</div>
    <div class="container my-4 ">
    <div class="col-md-4 offset-md-4 p-2 border bg-primary" style="  box-shadow:0 15px 25px rgba(0,0,0,.6);border-radius:20px; ">
    <form method="post" action=""enctype='multipart/form-data' >
 
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-bold" style="color:white;">Subject of Notice</label>
    <input type="text" name="name" required placeholder="Enter Subject of Notice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-bold"style="color:white;">Upload Notice</label>
    <input type="file" name="photo" required  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
 
  
 
  <button type="submit" class="btn btn-primary fw-bold"style="color:#ffff;">Upload Notice</button>
</form>
    </div>
</div>

</div>


<div class="container">
  <?php
$sel="select * from notice";
$status=mysqli_query($con,$sel);
$count=mysqli_num_rows($status);
echo $count;
if($count!=="")
{
while($row=mysqli_fetch_array($status))
{
  $id=$row['id'];
  $name=$row['name'];
 
  $photo=$row['photo'];
 
  $datetime=$row['datetime'];
  


}
}
else
{
  echo"<tr><th colspan='7'>No records in database</th>";
}
  ?>
  </tbody>
</table>
</div>
<div class="container bg-custom">

  
 <table class="table">
  <thead>
    <tr>
      <th scope="col" style="color:#ffff;">S.No.</th>
      <th scope="col" style="color:#ffff;">Latest-Notice</th>
     
      <th scope="col" style="color:#ffff;">Photo</th>
     
      <th scope="col" style="color:#ffff;">Date-Time</th> 
     
    </tr>
  </thead>
  <tbody>
  <?php
$sel="select * from notice";
$status=mysqli_query($con,$sel);
$count=mysqli_num_rows($status);

if($count!=="")
{
while($row=mysqli_fetch_array($status))
{
  $id=$row['id'];
  $name=$row['name'];
 
  $photo=$row['photo'];
 
  $datetime=$row['datetime'];
  

  echo"<tr>
  

  <td ><a href='picture/$photo' style='text-decoration:none; color:black;'><h2><img src='my/new.gif' width='70' height='80'> $name</h2></a> </td>
 
  <td><img src='picture/$photo' width='50' height='50'></td>
  
  <td>$datetime</td>
  <td><a href='delete2.php?id=$id'><i class='bi bi-shield-fill-x' ></a></td>
  
</tr>";
}
}
else
{
  echo"<tr><th colspan='7'>No records in database</th>";
}
  ?>
  </tbody>
</table>
</div>
    <div class="container-fluid bg-primary text-white h5 py-2 text-center">&copy Designed by Deepak Kumar</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>