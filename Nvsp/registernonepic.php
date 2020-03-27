<?php
$mobln=$_GET['mbln'];
$firstnm=$_GET['fstnm'];
$lastnm=$_GET['lstnm'];
$emailn=$_GET['emln'];
$passwordn=md5($_GET['passn']);
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="SELECT * FROM register WHERE email='$emailn'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>=1) echo "This Email Id is already registered";
else
{
$sqli="INSERT INTO register(mob,firstnm,lastnm,email,password) VALUES('$mobln','$firstnm','$lastnm','$emailn','$passwordn')";
if(@mysqli_query($con,$sqli)) echo "Registered successfully";
else echo "Error occured for registration";
}
mysqli_close($con);
?>