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
//Mobile number Validation and duplicate Mobile number check from database
$value=$_GET['field'];
 if(strlen($value)>0)
  {
     if(strlen($value)!=10) echo "Mobile no must be 10 digit number";
     else
     {
        if($mobile!=$value)
        {
           define("HostName","localhost");
           define("UserName","root");
           define("Password","");
           define("DbName","userdb");
           $con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
           mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
           $sql="SELECT * FROM register WHERE mobile='$value'";
           $result=mysqli_query($con,$sql);
           if(mysqli_num_rows($result)>=1) echo "This Mobile Number is already registered";
           mysqli_close($con);
        }
     }
  }
}
?>
