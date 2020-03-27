<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

  <title>UserProfile</title>
    

  <link rel="icon" href="eci-icon.ico" type="image/x-icon">

  <meta charset="utf-8">
  <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <!-- Custome style -->
  <link href="bootstrap.min.css" rel="stylesheet" />
  
  <link href="bootstrap-flatly.min.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet" type="text/css" />

  <!-- Font Awesome -->
  
  <link href="all.min.css" rel="stylesheet" />
  
  <link href="font-awesome.min.css" rel="stylesheet" type="text/css" />

  <link href="animations.css" rel="stylesheet" />
  <link href="fonts.css" rel="stylesheet" />
  <link href="main.css" rel="stylesheet" class="color-switcher-link" />
    <script src="jquery-2.1.4.js"></script>
  <!--[if lt IE 9]>
    <script src="html5shiv.min.js"></script>
    <script src="respond.min.js"></script>
    <script src="jquery-1.12.4.min.js"></script>
  <![endif]-->
  
  

   
 
  <style>
    /*.form-control {
      padding: 6px 5px !important;
    }*/
  </style>
</head>
<body>
  <input type="hidden" id="hdnLanguageArray" />
  <div id="preloader" class="preloader" style="z-index:8000;">
    <div class="preloader_image"></div>
  </div>

  <div id="dvLoading2" class="lds-dual-ring" style="z-index: 7000; display: none;"></div>
  <div class="clearfix"></div>

  <!--[if lt IE 9]>
    <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
  <![endif]-->
  <!--Modals start-->
  <!--knowAcModal By Sayali-->

  <div id="knowAcModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <div class="row">
            <div class="col-md-11 text-center">
              <h4 class="modal-title">
                Map
              </h4>
            </div>
            <div class="col-md-1 text-right">
              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div id="know_my_AC_partial"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- eof .modal -->
  <div id="canvas">
    <div id="box_wrapper">

      <!-- top left sections -->
      

      <header class="page_header header_white toggler_right">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 col-sm-12">
              <a href="/" class="logo top_logo">

                <img src="logo.png" />
              </a>
            </div>

            <div class="col-md-7 col-sm-12">

              <!-- main nav start -->
              <nav class="mainmenu_wrapper text-right">
                <ul class="mainmenu sf-menu">
                  <li class="active">
                    <a href="home.php">Home</a>
                  </li>

                  <li>
                    <a href="about_inner.php">About Us</a>
                  </li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="userindex.php">Elector Verification Program</a></li>
                      
                      <li><a href="/Forms/trackstatus">Track status</a></li>
                      <li><a href="getfamily_indexview.php">Family Tagging</a></li>
                      
                    </ul>
                  </li>
                    <li>                      
                      <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-o"></i><span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="myprofile.php">My Profile</a></li>
                        <li>
                          <a href="logout.php" id="login">Logout</a>
                        </li>
                      </ul>
                    </li>

                  <!-- contacts -->
                  <!--<li>
                    <a href="#">Contacts</a>
                  </li>-->
                  <!-- eof contacts -->
                  <!-- <li class="search hidden-xs hidden-sm"> -->
                  <!-- <a class="search_form_trigger header-button" href="#"> -->
                  <!-- <span> -->
                  <!-- <i class="flaticon-magnifying-glass bold"></i> -->
                  <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                  <!-- </span> -->
                  <!-- </a> -->
                  <!-- </li> -->
                </ul>
              </nav>
              <!-- eof main nav -->
              <!-- header toggler -->
              <span class="toggle_menu">
                <span></span>
              </span>
            </div>
          </div>
        </div>

        
      </header>

        

      <section class="ls section-content-min-height toppadding_10">
        <div class="container">
          <ul class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i>

        <a href="home.php" title="Home">Home</a>
         &gt; 

    My Profile
</li>
          </ul>
        </div>
        
   
   
   <div class="container toppadding_10">
  <div class="col-md-12 form-group">
      
   
  </div>
  <div class="panel">
    <div class="panel-content">

      <div id="divView">
        <div class="panel-heading">
          <div class="panel-title">
            <h2>My Profile</h2>
          </div>
        </div>
<?php
if(isset($_SESSION["userid"],$_SESSION["password"]))
{
$mobile=$_SESSION["mobile"];
$firstnm=$_SESSION["firstnm"];
$lastnm=$_SESSION["lastnm"];
$epic=$_SESSION["epic"];
$email=$_SESSION["email"];
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="SELECT mobile,firstnm,lastnm,epic,email FROM register WHERE  epic='$epic'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>=1)
{
  if($row=mysqli_fetch_array($result))
  {
  $mob=$row["mobile"];
  $fstnm=$row["firstnm"];
  $lstnm=$row["lastnm"];
  $epc=$row["epic"];
  $eml=$row["email"];
        echo "<div class='panel-body'>";
          echo "<div class='row'>";
            echo "<div class='col-md-2 col-sm-12 col-xs-12'></div>";
            echo "<div class='col-md-8 col-sm-12 col-xs-12'>";
              echo "<div class='table-responsive'>";

  echo "<table class='table table-condensed table-hover table-striped'>";
                  echo "<tr>";
                     echo "<td>First Name :</td>";
                     echo "<td>".$fstnm."</td>";
                   echo "</tr>";
                   echo "<tr>";
                     echo "<td>Last Name :</td>";
                     echo "<td>".$lstnm."</td>";
                  echo " </tr>";
                   
                     echo "<tr>";
                         echo "<td>Mobile Number :</td>";
                         echo "<td>".$mob."</td>";
                     echo "</tr>";
                     echo "<tr>";
                         echo "<td>Email Id :</td>";
                         echo "<td>".$eml."</td>";
                     echo "</tr>";
                     echo "<tr>";
                         echo "<td>EPIC Number :</td>";
                         echo "<td>".$epc."</td>";
                     echo "</tr>";
                 echo "</table>";
 
               
              echo "</div>";
             echo "</div>";
            echo "<div class='col-md-2 col-xs-12 col-sm-12'></div>";
           echo "</div>";
          

           echo "<div class='row'>";
             echo "<div class='col-md-12 form-group'>";
              echo "<div class='col-md-2 col-md-offset-6 text-right padding_0'>";
                 echo "<button type='button' onclick='editProfile();' class='btn btn-sm btn-info'><i class='fa fa-edit'></i>&nbsp;Edit Profile</button>";
               echo "</div>";
               echo "<div class='col-md-2'>";
                 echo "<button type='button' onclick='passwordProfile();' class='btn btn-sm btn-primary'><i class='fa fa-key'></i>&nbsp;Change Password</button>";
               echo "</div>";
             echo "</div>";
           echo "</div>";
          
         echo "</div>";
 }
}
mysqli_close($con);
}
?>
      </div>

      <div id="divEdit" style="display:none">
        <div class="panel-heading">
          <div class="panel-title">
            <h2>Edit Profile</h2>
          </div>
        </div>

        <div class="panel-body" >
<?php
if(isset($_SESSION["userid"],$_SESSION["password"]))
{
$mobilex=$_SESSION["mobile"];
$firstnmx=$_SESSION["firstnm"];
$lastnmx=$_SESSION["lastnm"];
$epicx=$_SESSION["epic"];
$emailx=$_SESSION["email"];
define("Hostnm","localhost");
define("Usernm","root");
define("Passwd","");
define("Dbnm","userdb");
$conx=mysqli_connect(Hostnm,Usernm,Passwd) or die("Failed to connect to MySQL: "); 
mysqli_select_db($conx,Dbnm) or die("Failed to connect to database: ");
$sqlx="SELECT mobile,firstnm,lastnm,epic,email FROM register WHERE  epic='$epic'";
$resultx=mysqli_query($conx,$sqlx);
if(mysqli_num_rows($resultx)>=1)
{
  if($rowx=mysqli_fetch_array($resultx))
  {
  $mobx=$rowx["mobile"];
  $fstnmx=$rowx["firstnm"];
  $lstnmx=$rowx["lastnm"];
  $epcx=$rowx["epic"];
  $emlx=$rowx["email"];
  echo "<form class='form-horizontal' role='form'>";
           echo "<div class='form-group'>";
              echo "<div class='col-md-12'>";
                echo "<input type='button' onclick='viewProfile()' value='View Profile' id='btnView' class='btn-sm btn-primary col-md-offset-11' />";
              echo "</div>";
            echo "</div>";


          echo "<div class='row'>";

          
            
            echo "<div class='form-group col-md-12'>";
              echo "<div class='col-md-3'>";
                echo "<label class=''>First Name</label>";
              echo "</div>";
              echo "<div class='col-md-6'>";
                echo "<div class='input-group input-group-sm'>";
                  echo "<span class='input-group-addon'><i class='fa fa-user fa' aria-hidden='false'></i></span>";
                  echo "<input class='form-control' id='FirstName1' name='FirstName' placeholder='Enter Username' type='text' value='$fstnmx' />";
                echo "</div>";
                echo "<div class='text-danger text-center'>";
                  echo "<span class='field-validation-valid field-validation-error' id='FirstName'></span>";
                echo "</div>";
              echo "</div>";
            echo "</div>";



              echo "<div class='form-group col-md-12'>";
                  echo "<div class='col-md-3'>";
                      echo "<label class=''>Last Name</label>";
                  echo "</div>";
                  echo "<div class='col-md-6'>";
                      echo "<div class='input-group input-group-sm'>";
                          echo "<span class='input-group-addon'><i class='fa fa-user fa' aria-hidden='false'></i></span>";
                          echo "<input class='form-control' id='LastName1' name='LastName' placeholder='Enter Username' type='text' value='$lstnmx' />";
                      echo "</div>";
                      echo "<div class='text-danger text-center'>";
                          echo "<span class='field-validation-valid field-validation-error' id='LastName'></span>";
                      echo "</div>";
                  echo "</div>";
              echo "</div>";

           
            echo "<div class='form-group col-md-12'>";
              echo "<div class='col-md-3'>";
                echo "<label class=''>Mobile Number</label>";
              echo "</div>";
              echo "<div class='col-md-6'>";
                echo "<div class='input-group input-group-sm'>";
                  echo "<span class='input-group-addon'><i class='fa fa-envelope fa' aria-hidden='true'></i></span>";
                  echo "<input class='form-control' id='Mobile1' name='Mobile' placeholder='Enter Mobile' type='text' onblur='mobileValidation();' value='$mobx' />";
                echo "</div>";
                echo "<div class='text-danger text-center'>";
                  echo "<span class='field-validation-valid field-validation-error' id='Mobile'></span>";
                echo "</div>";
              echo "</div>";
            echo "</div>";

            

            echo "<div class='form-group col-md-12'>";
              echo "<div class='col-md-3'>";
                echo "<label class=''>EPIC Number</label>";
              echo "</div>";
              echo "<div class='col-md-6'>";
                echo "<div class='input-group input-group-sm'>";
                  echo "<span class='input-group-addon'><i class='far fa-id-card fa' aria-hidden='false'></i></span>";
                  echo "<input class='form-control' id='EpicNo1' name='EpicNo' placeholder='Enter EPIC No.' type='text' value='$epcx' readonly />";
                echo "</div>";
                echo "<div class='text-danger text-center'>";
                  echo "<span class='field-validation-valid field-validation-error' id='EpicNo'></span>";
                echo "</div>";       
              echo "</div>";
            echo "</div>";



            echo "<div class='form-group col-md-12'>";
              echo "<div class='col-md-3'>";
                echo "<label class=''>Email</label>";
              echo "</div>";            
              echo "<div class='col-md-6'>";
                echo "<div class='input-group input-group-sm'>";
                  echo "<span class='input-group-addon'><i class='fa-mobile-phone fa' aria-hidden='true' style='font-size:20px'></i></span>";            
                  echo "<input class='form-control' id='Email1' name='Email' placeholder='Enter Email' type='text' onblur='emailValidation();' value='$emlx' />";
                echo "</div>";
                echo "<div class='text-danger text-center'>";
                  echo "<span class='field-validation-valid field-validation-error' id='Email'></span>";
                echo "</div>";
              echo "</div>";
            echo "</div>";



            echo "<div class='col-md-12 form-group'>";
              echo "<div class='col-md-12 form-group text-center'>";
                echo "<input type='button' id='btn_update' class='btn btn-primary btn-sm' value='Update details' onclick='userUpdate();' />";
              echo "</div>";
           echo "</div>";
echo "</form>";
  }
}
mysqli_close($conx);
}
?>

      </section>

      <footer class="page_footer ds columns_padding_25">
        <div class="container-fluid toppadding_20">
          <div class="row">
            <div class="col-md-7 col-sm-12">
              <div class="widget widget_text bottommargin_10">
                <a href="Nvsp_Overview.docx" class="logo top_logo small_logo 0">

                  <span class="logo_text">
                    <span class="site-name black">
                      <span class="highlight">Contact</span> Us
                    </span>
                  </span>
                </a>
                <p class="bottommargin_0">
                  For details of eligibility criteria or any other additional information related to electoral forms,
                  kindly visit <a href="https://eci.gov.in"><b class="link animate">https://eci.gov.in</b></a>
                </p>
                <p class="bottommargin_0">
                  For any other technical feedback or issues on the portal kindly send your feedback to
                  
                  <a href="mailto:ecitechsupport@eci.gov.in?Help Desk" target="_top">
                    <b class="techlink animate">ECI Technical Support</b>
                  </a>
                </p>
                <div>

                  <div class="media small-teaser">
                    <div class="media-left">
                      <i class="flaticon-phone-call highlight"></i>
                    </div>
                    <div class="media-body">
                      Toll free Number :1800111950
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-sm-6">
              <div class="widget widget_popular">

                <span class="logo_text logo">
                  <span class="site-name black">
                    <span class="highlight">Other</span> Links
                  </span>
                </span>
                <ul class="media-list">
                  <li class="media">
                    
                    <div class="media-body">
                      <h4>
                        <a href="http://results.eci.gov.in/" target="_blank">
                          Election Commission of India
                        </a>
                      </h4>
                    </div>
                  </li>
                  <li class="media">
                    
                    <div class="media-body">
                      <h4>
                        <a href="#">
                          Chief Electoral Officer
                        </a>
                      </h4>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <section class="ds page_copyright section_padding_15 with_top_border_container">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center text-white">
              <p>National Voter's Service Portal &copy; Copyright 2019. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- eof #box_wrapper -->
  </div>
  <!--Fixed section on the layout page-->
  
  
  
  
  

  
  
  
  

  
  

  <!-- jquery-ui -->
  <script src="jquery-ui.min.js" type="text/javascript"></script>

  <script src="compressed.js"></script>
  <script src="main.js"></script>
  
    <script src="/scripts/jquery_1.19.1-validate.js"></script>

  <!--Toaster-->
  <link href="jquery.toast.min.css" rel="stylesheet" />
  <script src="jquery.toast.min.js"></script>
  <script src="toasterNotifications.js"></script>
  <script src="bootstrap.min.js"></script>
  


<script src="jquery.validate.js"></script>
<script src="jquery.validate.unobtrusive.js"></script>
<script src="jquery.unobtrusive-ajax.min.js"></script>
<script src="ui.js"></script>
<script src="toastr.js"></script>
<link href="toastr.css" rel="stylesheet" />


<script>
 function editProfile() {
       document.getElementById('divEdit').style.display='';
       document.getElementById('divView').style.display='none';
     }

 function viewProfile() {
       document.getElementById('divView').style.display='';
       document.getElementById('divEdit').style.display='none';
     }

function passwordProfile()  {
      window.location.href="changePassword.php";
}
</script>


<script>
function mobileValidation() {
var mobval=document.getElementById('Mobile1').value;
var url="myprofile_mobilevalidate.php?field=" + mobval;
var xmlhttp;
if (window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
xmlhttp.open('GET',url,true);
xmlhttp.onreadystatechange=function() {
 if(xmlhttp.readyState==4 && xmlhttp.status==200)
document.getElementById('Mobile').innerHTML=xmlhttp.responseText;
}
xmlhttp.send(url);
}

function emailValidation() {
var emlval=document.getElementById('Email1').value;
var url="myprofile_emailvalidate.php?field=" + emlval;
var xmlhttp;
if (window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
xmlhttp.open('GET',url,true);
xmlhttp.onreadystatechange=function() {
 if(xmlhttp.readyState==4 && xmlhttp.status==200)
document.getElementById('Email').innerHTML=xmlhttp.responseText;
}
xmlhttp.send(url);
}
</script>


<script>
function userUpdate(){
var epic=document.getElementById('EpicNo1').value;
var mobile=document.getElementById('Mobile1').value;
var email=document.getElementById('Email1').value;
var firstname=document.getElementById('FirstName1').value;
var lastname=document.getElementById('LastName1').value;
 if(epic=="") showErrorToast("Error occured for updataion process");
 else if(mobile=="" || email=="")
 {
    if(mobile=="") document.getElementById('Mobile').innerHTML="Mobile Number field cannot be blanked";
    else document.getElementById('Mobile').innerHTML="";
    if(email=="") document.getElementById('Email').innerHTML="Email field cannot be blanked";
    else document.getElementById('Email').innerHTML="";
 }
 else if(epic!="" && mobile!="" && email!="")
 {
    if(document.getElementById('Mobile').innerHTML=="Mobile no must be 10 digit number" || document.getElementById('Mobile').innerHTML=="This Mobile Number is already registered" || document.getElementById('Email').innerHTML=="Invalid Email Id" || document.getElementById('Email').innerHTML=="This Email is already registered")
      showErrorToast("Please fill in correct format");
    else
     {
         var url="myprofileupdate.php?epcl="+epic+"&mbl="+mobile+"&first="+firstname+"&last="+lastname+"&eml="+email;
         var xmlhttp;
         if(window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
         else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
         xmlhttp.open('GET',url,true);
         xmlhttp.onreadystatechange=function() {
         if(xmlhttp.readyState==4) 
         { 
             if(xmlhttp.responseText=="Record editted successfully") {alert(xmlhttp.responseText); window.location.href="myprofile.php";}
             else showErrorToast("Error ocured");
         }
        }
        xmlhttp.send(url);       
     }
 }
}
</script>
</body>
</html>