<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];
if($id!="")
{
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sqli="DELETE FROM detail WHERE epicno='$id'";
if(@mysqli_query($con,$sqli)) 
 {
   echo "<script>showErrorToast'(Member deleted');</script>";
    header("Location:getfamily_details.php");
 }
else 
 {
   echo "<script>showErrorToast'(Error occured for registration');</script>";
   header("Location:getfamily_details.php");
 }
mysqli_close($con);
}
}
?>