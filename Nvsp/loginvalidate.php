<?php
$uid=$_POST['UserName'];
$pass=md5($_POST['Password']);
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="SELECT * FROM register WHERE mobile='$uid' AND password='$pass' OR epic='$uid' AND password='$pass' OR email='$uid' AND password='$pass'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>=1)
{
  session_start();
  $_SESSION["userid"]=$uid;
  $_SESSION["password"]=$pass;
  while($row=mysqli_fetch_array($result))
  {
  $_SESSION["mobile"]=$row["mobile"];
  $_SESSION["firstnm"]=$row["firstnm"];
  $_SESSION["lastnm"]=$row["lastnm"];
  $_SESSION["epic"]=$row["epic"];
  $_SESSION["email"]=$row["email"];
  }
  header("Location:home.php");
}
else 
{
 session_start();
 $_SESSION["fail"]=1;
 header("Location:login.php");
}
mysqli_close($con);
?>