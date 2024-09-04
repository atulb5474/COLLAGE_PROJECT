<?php
include('db.php');
if($_SERVER['REQUEST_METHOD']=="GET")
{
    $id=$_GET['id'];
    //for deleting image
    $sel="select photo from notice where id='$id'";
    $check=mysqli_query($con,$sel);
    $row=mysqli_fetch_array($check);
    $photo=$row['photo'];
    unlink("picture/$photo");
    //for deleting record
    $del="delete from notice where id='$id'";
    $status=mysqli_query($con,$del);
    if($status)
    {
        echo"<script>alert('suceesfully deleted!')
        window.location='feedback.php'</script>";
    }
    else
    {
        echo"<script>alert('fails')
  window.location='register.php'</script>";
    }
}
?>