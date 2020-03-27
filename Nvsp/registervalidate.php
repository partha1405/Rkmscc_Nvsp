<?php
$mobile=$_GET['mob'];
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="SELECT * FROM register WHERE mobile='$mobile'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>=1)
 echo "This Mobile Number is already registered";
else
 echo "This Mobile Number is not registered";
mysqli_close($con);
?>
