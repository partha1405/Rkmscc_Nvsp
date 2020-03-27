<?php
$mobl=$_GET['mbl'];
$epic=$_GET['epc'];
$email=$_GET['eml'];
$password=md5($_GET['pass']);
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="SELECT * FROM register WHERE epic='$epic'";
$sqlx="SELECT * FROM register WHERE email='$email'";
$result=mysqli_query($con,$sql);
$resultx=mysqli_query($con,$sqlx);
if(mysqli_num_rows($result)>=1) echo "This Epic Number is already registered";
else if(mysqli_num_rows($resultx)>=1) echo "This Email Id is already registered";
else
{
$sqli="INSERT INTO register(mobile,epic,email,password) VALUES('$mobl','$epic','$email','$password')";
if(@mysqli_query($con,$sqli)) echo "Registered successfully";
else echo "Error occured for registration";
}
mysqli_close($con);
?>