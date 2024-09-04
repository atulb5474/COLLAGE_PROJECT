<?php
include('db.php');
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
    <a class="nav-link active text-white fw-bold" aria-current="page" href="index.php">College Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white fw-bold" href="notice.php">Latest Notice</a>
  </li>
 
</ul>
      
    </div>
    
</div>
  
    
     
<div class="container my-4">
<table class="table">
  <thead>
    <tr>
     
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
  
  <td>$productname</td>
  <td>$program</td>
  <td>$year</td>
  <td>$company</td>
  <td>$establish</td>
  <td>$package</td>
  

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
<div class="container-fluid gap"  >
  <div class="container  shadow p-3 mb-5 bg-body-tertiary rounded"  >
    <div class="row "  >
      <div class="col-md-4 my-3  fw-bold border align-self:center">
        <p style="font-size: 20px;">Address:- Growth Center, Jasoiya More, Aurangabad Bihar - 824102</p>
      
      </div><br>
   


      <div class="col-md-4 my-3 mx-2 fw-bold border align-self:center">
        <p style="font-size: 20px;"><i class="bi bi-telephone"></i>Contact Number:-</i>+91-9308392306 / 9102318888 <br>9308394144 / 9334127770 / 9322698410</p><br>
   
      </div>
   

      <div class="col-md-3 my-3 fw-bold border align-self:center">
        <p style="font-size:20px;"><i class="bi bi-envelope"></i>Email:- Sityog@gmail.com</p><br>
        <p style="font-size:20px;">yahoo:-Sityog@yahoo.com</p>
      </div>
      <div class="col-md-6 border my-3">
        <a href="https://www.facebook.com/sityogaurangabad"><i class="bi bi-facebook" style="font-size: 30px;"></i></a>
        <a href="https://www.youtube.com/channel/UCqLpIqvF3GldPpZWso6AIlg"><i class="bi bi-youtube" style="font-size: 30px; color:red; padding-left: 15px;"></i></a>
        <a href="https://www.instagram.com/sityog_institute_of_technology/?hl=en"><i class="bi bi-instagram" style="font-size: 30px; color:blue; padding-left: 15px;"></i></a>
     <a href=""></a>
      </div>
    </div>
      <div class="row border align-self:center">
        <div class="col-md-6">
          <div class="detailTab-section-title">
            <div class="detailTab-title">
                <h4 >Important Links</h4>
           
            </div>
          </div>
          <a href="http://www.sityog.edu.in/alumni/"><li class=" fw-bold">Alumini</li></a>
          <a href="https://swayam.gov.in/">    <li class=" fw-bold">Online Classes</li></a>
          <a href="https://www.7nishchay-yuvaupmission.bihar.gov.in/">    <li class=" fw-bold">Student Credit Card Apply</li></a>
          <a href="http://akubihar.ac.in/Academics/Syllabus.aspx">    <li class=" fw-bold">B.tech Syllabus</li></a>
          <a href="http://akubihar.ac.in/Academics/Syllabus.aspx">    <li class=" fw-bold">BCA Syllabus</li></a>
          <a href="http://akubihar.ac.in/Academics/Syllabus.aspx">    <li class=" fw-bold">BBA Syllabus</li></a>
          <a href="http://sbteonline.in/syllabus">    <li class=" fw-bold">Diploma Syllabus</li></a>
          <a href=" https://results.akuexam.net/"><li class=" fw-bold">AKU Result</li></a>
          <a href=" https://www.akubihar.com//"><li class=" fw-bold">AKu Previous Year Question</li></a>
        </div>
      </div>
    </div>
</div>
    <div class="container-fluid bg-primary text-white h5 py-2 text-center">&copy Designed by Deepak Kumar</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>