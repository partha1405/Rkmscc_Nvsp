
<!DOCTYPE html>
<html>
<head>

  <title></title>
    

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
<body onload="DrawCaptcha();">
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
              <a href="index.php" class="logo top_logo">

                <img src="logo.png" />
              </a>
            </div>

            <div class="col-md-7 col-sm-12">

              <!-- main nav start -->
              <nav class="mainmenu_wrapper text-right">
                <ul class="mainmenu sf-menu">
                  <li class="active">
                    <a href="index.php">Home</a>
                  </li>

                  <li>
                    <a href="about.php">About Us</a>
                  </li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="login.php">Elector Verification Program</a></li>
                      
                      <li><a href="#">Track status</a></li>
                      <li><a href="login.php">Family Tagging</a></li>
                      
                    </ul>
                  </li>
                    <li>
                      <a href="login.php" id="login">Login</a>
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

        <a href="index.php" title="Home">Home</a>
         &gt; 

    Login
</li>
          </ul>
        </div>
        

  
  <div class="container-fluid">
      <div class="col-md-offset-4" style="align-content:center; color:forestgreen"><h4></h4></div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-md-offset-3">

          <div class="panel panel-default">
            <div class="panel-body">
              <div class="bottommargin_10 col-md-12 text-center">
                <i class="fa fa-4x fa-user text-primary"></i>
              </div>
              <div id="l-login" class="bottommargin_0 col-md-12 form-group">
<form class="form-horizontal" role="form" name="LoginForm" id="LoginForm" action="loginvalidate.php" method="post">                  <div class="form-group">
                    <div class="col-md-3">
                      <label class="" for="UserName">UserName</label>
                    </div>

                    <div class="col-md-9">
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>

                        <input autocomplete="off" class="form-control" id="UserName1" name="UserName" placeholder="Enter Mobile/EPIC/Email" type="text" value="" />
                        <span class="field-validation-valid text-danger" id="UserName"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3">
                      <label class="" for="Password">Password</label>
                    </div>
                    <div class="col-md-9">
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon">
                          <i class="fa fa-key"></i>
                        </span>

                        <input class="form-control" id="Password1" name="Password" placeholder="Enter password" type="password" />
                        <span class="field-validation-valid text-danger" id="Password"></span>
                          
                        

                      </div>
                    </div>
                  </div>
                  <div class="form-group" id="div_captcha">
                    <div class="col-md-3">
                      <label>Captcha</label>
                    </div>
                    <div class="col-md-5">

                      <input id="imgCaptcha1" name="imgCaptcha" style="width:100px; color:red;" type="text" disabled />
                      <button class="btn btn-sm btn-link" id="imgRefresh" type="button" onclick="DrawCaptcha();"><img src="reload.jpg" alt="Captcha"></img></button>
                      
                    </div>
                    <div class="col-md-4">
                      <input class="form-control" id="txtCaptcha1" maxlength="14" name="txtCaptcha" placeholder="captcha" type="text" value="" />
                      <span class="field-validation-valid text-danger" id="txtCaptcha"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    
                    <div class="col-md-12">
                      <button class="btn btn-info btn-block login-button" name="Submit" type="button" onclick="emptyCheck();" >Login&nbsp;</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 text-center">
                      <a href="resetpassword.php" class="text-danger">Forgot password ? </a>

                    </div>
                  </div>
                  <div class="form-group text-center bottommargin_0">
                    <a href="register.php" class="btn btn-link font-weight-700 fontsize_18">
                      Don't have account, Register as a new user.
                    </a>
                    
                  </div>
</form>              </div>
            </div>
          </div>
        </div>
      </div>
  </div>


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
  
    <script src="jquery_1.19.1-validate.js"></script>

  <!--Toaster-->
  <link href="jquery.toast.min.css" rel="stylesheet" />
  <script src="jquery.toast.min.js"></script>
  <script src="toasterNotifications.js"></script>
  <script src="bootstrap.min.js"></script>
  
  <script src="jquery.validate.js"></script>
  <script src="jquery.validate.unobtrusive.js"></script>
  <script src="jquery.unobtrusive-ajax.js"></script>
  <script src="toastr.js"></script>
  
  <script src="aes.js"></script>
  <link href="toastr.css" rel="stylesheet" />


<script type="text/javascript">
 function DrawCaptcha()
    {
        var a = Math.ceil(Math.random() * 9)+ '';
        var b = Math.ceil(Math.random() * 9)+ '';       
        var c = Math.ceil(Math.random() * 9)+ '';  
        var d = Math.ceil(Math.random() * 9)+ '';  
        var e = Math.ceil(Math.random() * 9)+ '';  
        var f = Math.ceil(Math.random() * 9)+ '';  
        var g = Math.ceil(Math.random() * 9)+ '';  
        var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
        document.getElementById("imgCaptcha1").value = code
    }

    // Validate the Entered input aganist the generated security code function   
    function ValidCaptcha(){
        var str1 = removeSpaces(document.getElementById('imgCaptcha1').value);
        var str2 = removeSpaces(document.getElementById('txtCaptcha1').value);
        if (str1 == str2) return true;        
        return false;
        
    }

    // Remove the spaces from the entered and generated code
    function removeSpaces(string)
    {
        return string.split(' ').join('');
    }

//Ajax program
function emptyCheck() {
var usernm=document.getElementById('UserName1').value;
var passwd=document.getElementById('Password1').value;
var captcha=document.getElementById('txtCaptcha1').value;
if(usernm=="" || passwd=="" || captcha=="")
 {
  if(usernm=="") document.getElementById('UserName').innerHTML='The UserName field is required.';
  else document.getElementById('UserName').innerHTML='';
  if(passwd=="") document.getElementById('Password').innerHTML='The Password field is required.';
  else document.getElementById('Password').innerHTML='';
  if(captcha=="") document.getElementById('txtCaptcha').innerHTML='The Captcha field is required.';
  else document.getElementById('txtCaptcha').innerHTML='';
  return false
 }
 else if(usernm!="" && passwd!="" && captcha!="")
 {
  document.getElementById('UserName').innerHTML='';
  document.getElementById('Password').innerHTML='';
  document.getElementById('txtCaptcha').innerHTML='';
  var str1 = removeSpaces(document.getElementById('imgCaptcha1').value);
  var str2 = removeSpaces(document.getElementById('txtCaptcha1').value);
  if (str1 == str2) document.getElementById("LoginForm").submit();
  else {document.getElementById('txtCaptcha').innerHTML='Enter correct Captcha.'; return false;}
 }
}
</script> 
<?php
session_start();
if(isset($_SESSION["fail"]))
{
if($_SESSION["fail"]==1)
echo "<script>showErrorToast('Login failed. Please enter valid username or/and password')</script>";
}
?>
</body>
</html>
