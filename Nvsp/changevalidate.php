<?php
session_start();
?>
<?php
if(isset($_SESSION["userid"],$_SESSION["password"]))
{
$mobile=$_SESSION["mobile"];
$firstnm=$_SESSION["firstnm"];
$lastnm=$_SESSION["lastnm"];
$epic=$_SESSION["epic"];
$email=$_SESSION["email"];
}
$formfield=$_GET['field'];
$value=$_GET['query'];

//Old password check from database
if($formfield=='oldPassword')
{
 if(strlen($value)>0)
  {
      $password=md5($value);
     define("HostName","localhost");
     define("UserName","root");
     define("Password","");
     define("DbName","userdb");
     $con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
     mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
     $sql="SELECT * FROM register WHERE mobile='$mobile' AND password='$password'";
     $result=mysqli_query($con,$sql);
     if(mysqli_num_rows($result)>=1) echo "";
     else echo "Old password does not match";
     mysqli_close($con);
  }
}

//New password validation
if($formfield=='newPassword')
{
 if(strlen($value)>0 && strlen($value)<6 || strlen($value)>0 && strlen($value)>20)
  echo "Password must not be lesser than six character and greater than twenty character";
}
?>
