<?php
$mobile=$_GET['mob'];
$password=md5($_GET['pass']);
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="UPDATE register SET password='$password' WHERE mobile='$mobile'";
if(@mysqli_query($con,$sql)) echo"Password changed successfully";
else echo "Error occured";
mysqli_close($con);
?>