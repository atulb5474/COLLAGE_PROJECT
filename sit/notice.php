<?php
include('db.php');
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
  .table
  {
    box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4; 
  }
  th{
    color:black;
  }
  td{
    color:black;
  }
  .detailTab-section-title {
    display: inline-block;
    width: 100%;
    border-bottom: 2px solid #E8E8E8;
    margin-bottom: 10px;
}
.detailTab-title {
    display: inline-block;
    max-width: 98%;
    border-bottom: 2px solid #FF6633;
    padding-bottom: 2px;
    margin-bottom: -2px;
}
tr:nth-child(even) {background:rgb(201, 218, 243)}
      tr:nth-child(odd) {background:#fff}
 </style>
    </head>

  <body  >
  <image src="image/download.png" style="width:100%; height:130px; box-shadow: 0 15px 25px rgba(0,0,0,.6);border-radius:10px;">
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
                  <a class="nav-link text-white fw-bold" href="index.php"text-white fw-bold>College Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="notice.php"text-white fw-bold>Latest Notices</a>
                  </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <div class="detailTab-section-title shadow p-3 mb-5 bg-body-tertiary rounded" style="text-align:center;">
    <div class="detailTab-title">
        <h2>Latest Notice of Sityog_institute_of_technology</h2>
    </div>
  </div>
<div class="container ">

  
 <table class="table bg-custom">
  <thead>
    <tr>
      
      <th scope="col" style="color:black">Latest Notice</th>
     
     
      <th scope="col "style="color:black;">Date-Time</th> 
     
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
 
  
  <td ><a href='picture/$photo' style='text-decoration:none; color:black;'><h2><img src='my/new.gif' width='50' height='50'> $name</h2></a> </td>
 
  
 
  <td ><h2 style='black;'>$datetime</h2></td>
  
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
<div class="container-fluid gap bg-custom"  >
        <div class="container  shadow p-3 mb-5 bg-body-tertiary rounded" >
          <div class="row "  >
            <div class="col-md-4 my-3  fw-bold border align-self:center">
              <p style="font-size: 20px; color:white;">Address:- Growth Center, Jasoiya More, Aurangabad Bihar - 824102</p>
            
            </div><br>
         
    
      
            <div class="col-md-4 my-3 mx-2 fw-bold border align-self:center">
              <p style="font-size: 20px;color:white;"><i class="bi bi-telephone" style="color:white;"></i>Contact Number:-</i>+91-9308392306 / 9102318888 <br>9308394144 / 9334127770 / 9322698410</p><br>
         
            </div>
         
     
            <div class="col-md-3 my-3 fw-bold border align-self:center">
              <p style="font-size:20px;color:white;"><i class="bi bi-envelope"style="color:white;"></i>Email:- Sityog@gmail.com</p><br>
              <p style="font-size:20px;color:white;">yahoo:-Sityog@yahoo.com</p>
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
                      <h4 style="color:white;">Important Links</h4>
                 
                  </div>
                </div>
                <a href="http://www.sityog.edu.in/alumni/"><li class=" fw-bold text-white">Alumini</li></a>
                <a href="https://swayam.gov.in/">    <li class=" fw-bold text-white">Online Classes</li></a>
                <a href="https://www.7nishchay-yuvaupmission.bihar.gov.in/">    <li class=" fw-bold text-white">Student Credit Card Apply</li></a>
                <a href="http://akubihar.ac.in/Academics/Syllabus.aspx">    <li class=" fw-bold text-white">B.tech Syllabus</li></a>
                <a href="http://akubihar.ac.in/Academics/Syllabus.aspx">    <li class=" fw-bold text-white">BCA Syllabus</li></a>
                <a href="http://akubihar.ac.in/Academics/Syllabus.aspx">    <li class=" fw-bold text-white">BBA Syllabus</li></a>
                <a href="http://sbteonline.in/syllabus">    <li class=" fw-bold text-white">Diploma Syllabus</li></a>
                <a href=" https://results.akuexam.net/"><li class=" fw-bold text-white">AKU Result</li></a>
                <a href=" https://www.akubihar.com//"><li class=" fw-bold text-white">AKu Previous Year Question</li></a>
              </div>
            </div>
          </div>
      </div>
   

    <div class="container-fluid bg-custom text-white h5 py-2 text-center">&copy Designed by Deepak Kumar</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>