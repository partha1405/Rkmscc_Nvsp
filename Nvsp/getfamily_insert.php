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
$epicx = $_GET['familyepic'];
$submission=$_GET['submission'];
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="SELECT epicno,acno,partno,slno,first_nm,last_nm,first_rl,last_rl,type_rl,age,gender,address FROM verify WHERE  epicno='$epicx'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>=1)
{
  if($row=mysqli_fetch_array($result))
  {
  $epicno=$row["epicno"];
  $acno=$row["acno"];
  $partno=$row["partno"];
  $slno=$row["slno"];
  $firstnm=$row["first_nm"];
  $lastnm=$row["last_nm"];
  $firstrl=$row["first_rl"];
  $lastrl=$row["last_rl"];
  $typerl=$row["type_rl"];
  $age=$row["age"];
  $gender=$row["gender"];
  $address=$row["address"];
  $sqlx="SELECT * FROM detail WHERE  epicno='$epicno'";
  $resultx=mysqli_query($con,$sqlx);
  if(mysqli_num_rows($resultx)>=1)
  {
      echo "This Epic NO is already submitted";
  }
  else
  {
     $sqli="INSERT INTO detail(epic,epicno,acno,partno,slno,status) VALUES('$epic','$epicno','$acno','$partno','$slno','$submission')";
     if(@mysqli_query($con,$sqli)) echo "Registered successfully";
     else echo "Error occured for registration";
  }
 }             
}
else echo "<h4 style='color:red;text-align:center;'>No record found</h4>";
mysqli_close($con);
}
?>