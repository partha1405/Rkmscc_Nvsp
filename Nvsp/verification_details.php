
<!DOCTYPE html>
<html>
<head>
</head>
<body>
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
$sql="SELECT first_nm,last_nm,first_rl,last_rl,type_rl,age,gender,address FROM verify WHERE  epicno='$id'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>=1)
{
  if($row=mysqli_fetch_array($result))
  {
  $firstnm=$row["first_nm"];
  $lastnm=$row["last_nm"];
  $firstrl=$row["first_rl"];
  $lastrl=$row["last_rl"];
  $typerl=$row["type_rl"];
  $age=$row["age"];
  $gender=$row["gender"];
  $address=$row["address"];
            echo "<table>";
                  echo "<tr>";
                     echo "<td>Name :</td>";
                     echo "<td>".$firstnm." ".$lastnm."</td>";
                   echo "</tr>";
                   echo "<tr>";
                     echo "<td>Relative Name :</td>";
                     echo "<td>".$firstrl." ".$lastrl."</td>";
                   echo " </tr>";
                     echo "<tr>";
                         echo "<td>Relation Type :</td>";
                         echo "<td>".$typerl."</td>";
                     echo "</tr>";
                     echo "<tr>";
                         echo "<td>Age :</td>";
                         echo "<td>".$age."</td>";
                     echo "</tr>";
                     echo "<tr>";
                         echo "<td>Gender :</td>";
                         echo "<td>".$gender."</td>";
                     echo "</tr>";
                     echo "<tr>";
                         echo "<td>Address :</td>";
                         echo "<td>".$address."</td>";
                     echo "</tr>";
                 echo "</table>";                        
 }
}
mysqli_close($con);
}
}
?>
</body>
</html>