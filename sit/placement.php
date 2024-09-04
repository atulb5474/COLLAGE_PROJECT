<?php
session_start();

include('db.php');


if($_SERVER['REQUEST_METHOD']=="POST")
{
  //for posting value
  $productname=$_POST['productname'];
  $program=$_POST['program'];
  $year=$_POST['year'];
 
  $company=$_POST['company'];
  $establish=$_POST['establish'];
  $package=$_POST['package'];
  //inserting value
  $ins="insert into product(productname,program,year,company,establish,package) 
  values('$productname','$program','$year','$company','$establish','$package')";
  $status=mysqli_query($con,$ins);
if($status)
{
  echo"<script>alert('Succesfully sent!')
  window.location='placement.php'</script>";
}
else{
  echo"<script>alert('fails')
  window.location='placement.php'</script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
<style>
    .gap
{
    padding-top: 50px;
    padding-bottom: 50px;
}
    </style>
</head>
  <body>
  <div class="container-fluid text-white h1 py-5 text-center"><image src="image/download.png" style="width:100%; height:130px; box-shadow: 0 15px 25px rgba(0,0,0,.6);border-radius:10px;"></div>
<div class="container-fluid gap">
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
<li class="nav-link">
  <a class="nav-link text-white fw-bold" href="logout.php">logout</a>
</li>
</ul>
      
    </div>
    
</div>
  
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Placement Details</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Placement Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Student-Name:</label>
            <input type="text" name="productname" required class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Program Graduated From:</label>
            <input type="text" class="form-control" required name="program" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Year of Passing:</label>
            <textarea class="form-control" name="year" required id="message-text"></textarea>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Company</label>
            <input type="text" class="form-control" name="company" required id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Establishment</label>
            <input type="text" class="form-control" name="establish" required id="recipient-name">
          </div>
         
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Pay package At Appoitment</label>
            <input type="text" class="form-control" name="package" required id="recipient-name">
          </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="container my-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name of Student</th>
      <th scope="col">Program Graduated From</th>
      <th scope="col">Year of Passing</th>
       <th scope="col">Company</th> 
       <th scope="col">Establishment</th> 
       <th scope="col">Pay package at Appoitment</th> 
    </tr>
</thead>
  <tbody>
  <?php
$sel="select * from product";
$status=mysqli_query($con,$sel);
$count=mysqli_num_rows($status);

if($count>=1)
{
while($row=mysqli_fetch_array($status))
{
  $id=$row['id'];
  $productname=$row['productname'];
  $program=$row['program'];
  $year=$row['year'];
  $company=$row['company'];
  $establish=$row['establish'];
  $package=$row['package'];
  echo"<tr>
  <th >$id</th>
  <td>$productname</td>
  <td>$program</td>
  <td>$year</td>
  <td>$company</td>
  <td>$establish</td>
  <td>$package</td>
  <td><a href='delete.php?id=$id'><i class='bi bi-shield-fill-x'></a></td>

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