<?php
include('db.php');
if($_SERVER['REQUEST_METHOD']=="GET")
{
    $id=$_GET['id'];
    //for deleting image
   
    //for deleting record
    $del="delete from product where id='$id'";
    $status=mysqli_query($con,$del);
    if($status)
    {
        echo"<script>alert('suceesfully deleted!')
        window.location='placement.php'</script>";
    }
    else
    {
        echo"<script>alert('fails')
  window.location='register.php'</script>";
    }
}
?>