<?php
session_start();
include('db.php');

if($_SERVER['REQUEST_METHOD']=="POST")
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $verify="select * from register where email='$email' and password='$password'";
  $status=mysqli_query($con,$verify);
$count=mysqli_num_rows($status);
//echo $count;
if($count>=1)
{
  $row=mysqli_fetch_array($status);
  $name=$row['name'];
  $photo=$row['photo'];
  $id=$row['id'];
  $_SESSION['name']=$name;
  $_SESSION['photo']=$photo;
  $_SESSION['id']=$id;
  echo"<script>alert('Succesfully login!')
  window.location='home.php'</script>";
}

else
{
  echo"<script>alert('fails')
  window.location='index.php'</script>";
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <style>
  .bg-custom
  {
    background:indigo;
  }
  button
  {background: linear-gradient(90deg, transparent, #03e9f4);
 width:80px;
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

  }</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="background-image: url('image/animation2.gif');">

  <header class="sticky-top border ">
      <nav class="navbar navbar-expand-lg bg-custom">
          <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="#">Sityog College Portal</a>
            <button class="navbar-toggle " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active text-white fw-bold" aria-current="page" href="index.php"text-white fw-bold>College Login</a>
                </li>
             
               
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="notice.php"text-white fw-bold>Latest Notices</a>
                  </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </header>

  <image src="image/download.png" style="width:100%; height:130px; box-shadow: 0 15px 25px rgba(0,0,0,.6);border-radius:10px;">
    <div class="container-fluid  text-white h1 py-5 text-center"></div>
    <div class="container my-4 ">
    <div class="col-md-4 offset-md-4 p-2 border bg-custom" style="  box-shadow:0 15px 25px rgba(0,0,0,.6);border-radius:20px;">
    <h3 style="text-align:center;color:white;">College Offical Log In</h3>    
    <form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white fw-bold">Email address</label>
    <input type="email" required placeholder=" Enter your Email Address" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-white fw-bold">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white fw-bold">Password</label>
    <input type="password" name="password" required placeholder ="Enter your Password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Log In</button>
</form>
    </div>
<p class="text-center text-white fw-bold"> If you don't have any account <a href="register.php" style="font-size:15px;">Click here</a>to register </p>
</div></div>
    <div class="container-fluid bg-primary text-white h5 py-2 text-center">&copy Designed by Deepak Kumar</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>