<?php
session_start();
if(isset($_SESSION["userid"],$_SESSION["password"]))
{
$mobile=$_SESSION["mobile"];
$firstnm=$_SESSION["firstnm"];
$lastnm=$_SESSION["lastnm"];
$epic=$_SESSION["epic"];
$email=$_SESSION["email"];
}
?>
<?php
$epicx = $_GET['id'];
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="SELECT epicno,acno,partno,slno,first_nm,last_nm,first_rl,last_rl,type_rl,age,gender,address,photo FROM verify WHERE  epicno='$epicx'";
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
  //$photo=$row["photo"];
  $sqlx="SELECT * FROM detail WHERE  epicno='$epicno'";
  $resultx=mysqli_query($con,$sqlx);
  if(mysqli_num_rows($resultx)>=1)
  {  
      require('fpdf182/fpdf.php');
      $pdf=new FPDF();
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',11);
      $pdf->SetFillColor(1,99,255);
      $pdf->SetTextColor(3,81,104);
      $pdf->Cell(40,5,'Epic NO',1,0,'');
      $pdf->Cell(120,5,$epicno,1,1,'');
      $pdf->Cell(40,5,'Assembly NO',1,0,'');
      $pdf->Cell(120,5,$acno,1,1,'');
      $pdf->Cell(40,5,'Part NO',1,0,'');
      $pdf->Cell(120,5,$partno,1,1,'');
      $pdf->Cell(40,5,'SL NO',1,0,'');
      $pdf->Cell(120,5,$slno,1,1,'');
      $pdf->Cell(40,5,'First Name',1,0,'');
      $pdf->Cell(120,5,$firstnm,1,1,'');
      $pdf->Cell(40,5,'Last Name',1,0,'');
      $pdf->Cell(120,5,$lastnm,1,1,'');
      $pdf->Cell(40,5,'Age',1,0,'');
      $pdf->Cell(120,5,$age,1,1,'');
      $pdf->Cell(40,5,'Gender',1,0,'');
      $pdf->Cell(120,5,$gender,1,1,'');
      //$pdf->Cell(60,5,'Photo',1,0,'');
     //$pdf->Image($photo,50,30);
      $pdf->Output('my_file.pdf','I');
  }
  else
  {
    echo "<script>alert('This Epic NO is not submitted');</script>";
     //header("Location:getfamily_verificationview.php");
  }
 }             
}
else echo "<h4 style='color:red;text-align:center;'>No record found</h4>";
mysqli_close($con);
?>