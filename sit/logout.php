<?php
session_start();
session_unset();
session_destroy();
echo"<script>alert('loged out sucessfully');
  window.location='index.php'</script>";
?>
