<?php
$epicl=$_GET['epcl'];
$mobl=$_GET['mbl'];
$firstl=$_GET['first'];
$lastl=$_GET['last'];
$emal=$_GET['eml'];
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="UPDATE register SET mobile='$mobl',firstnm='$firstl',lastnm='$lastl',email='$emal' WHERE epic='$epicl'";
if(@mysqli_query($con,$sql)) echo "Record editted successfully";
else echo "Error occured";
mysqli_close($con);
?>