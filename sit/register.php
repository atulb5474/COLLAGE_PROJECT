<?php
include('db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
  //for posting value
  $name=$_POST['name'];
  $contactno=$_POST['contactno'];
  $email=$_POST['email'];
  $photo=$_FILES['photo']['name'];
  move_uploaded_file($_FILES['photo']['tmp_name'],"profile/$photo");
  
  $password=$_POST['password'];
  //inserting value
  $ins="insert into register(name,contactno,photo,email,password,datetime) 
  values('$name','$contactno','$photo','$email','$password',now())";
  $status=mysqli_query($con,$ins);
if($status)
{
  echo"<script>alert('Succesfully sent!')
  window.location='register.php'</script>";
}
else{
  echo"<script>alert('fails')
  window.location='register.php'</script>";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
 <style>
  .bg-custom
  {
    background:indigo;
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
    <div class="container my-4 ">
    <div class="col-md-4 offset-md-4 p-2 border bg-custom" style="  box-shadow:0 15px 25px rgba(0,0,0,.6);border-radius:20px; ">
    <form method="post" action=""enctype='multipart/form-data' >
 
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-bold" style="color:white;">Name</label>
    <input type="text" name="name" required placeholder="Enter Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label  fw-bold"style="color:white;">Contact No</label>
    <input type="text" name="contactno" required placeholder="Enter Your Contact Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-bold"style="color:white;">Photo</label>
    <input type="file" name="photo" required  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-bold"style="color:white;">Email</label>
   
    <input type="email" name="email" required placeholder="Enter Your Email Id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label fw-bold"style="color:white;">Password</label>
    <input type="password" name="password" placeholder="Create Your password" required class="form-control" id="exampleInputPassword1">
  </div>
  
 
  <button type="submit" class="btn btn-primary fw-bold"style="color:#ffff;">Register</button>
</form>
    </div>
</div>
<p class="text-center text-white"> If you  have any account <a href="index.php">Click here</a> to login</p>
</div>
<div class="container">

  
 
  <?php
$sel="select * from register";
$status=mysqli_query($con,$sel);
$count=mysqli_num_rows($status);
echo $count;
if($count!=="")
{
while($row=mysqli_fetch_array($status))
{
  $id=$row['id'];
  $name=$row['name'];
  $email=$row['email'];
  $photo=$row['photo'];
  $contactno=$row['contactno'];
  $datetime=$row['datetime'];
  $password=$row['password'];


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