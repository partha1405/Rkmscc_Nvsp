
<!DOCTYPE html>
<html>
<head>

  <title>ResetPassword</title>
    

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
              <a href="/" class="logo top_logo">

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

        <a href="login.php" title="Login">Login</a>
         &gt; 

    Forgot Password
</li>
          </ul>
        </div>
        

    <div>
       
        
    </div>



    <div class="container">
        <div class="row main">

<form class="form-horizontal" role="form">
              <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                    <div class="panel panel-primary" style="border-style:solid;box-shadow: 0 3px 8px 0 #ccc !important;">
                        
                        <div class="panel-heading easternblue">
                            <div class="panel-title text-center">Reset Password</div>
                        </div>

                        <div class="panel-body" style="padding-bottom:0;padding-top: 2px ;padding-left:10px;padding-right:10px">

                            <span>* NOTE - Password must contain minimum 6 characters at least 1 Uppercase Alphabet, 1 digit and 1 Special Character </span>

                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="input-group col-sm-offset-1 col-sm-10 col-md-10" style="margin-top:6%">
                                    <span class="input-group-addon"><i class="fa-mobile-phone fa" aria-hidden="true" style="font-size:20px"></i></span>
                                    <input class="form-control"  id="mobile1" name="mobile" maxLength="10" placeholder="Enter your registered mobile number" type="text" value="" />
                                </div>
                                <div style="color:Red;margin-bottom:0px;text-align:center">
                                    <span class="field-validation-valid field-validation-error" id="mobile"></span>
                                </div>
                            </div>

                            <div class="form-group" id="divCaptcha">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label>Captcha</label>
                                        <input id="imgCaptcha1" name="imgCaptcha" type="text" style="width:100px; color:red;" disabled />
                                        <button class="btn btn-sm btn-link" id="imgRefresh" type="button" onclick="DrawCaptcha();"><img src="reload.jpg" alt="Captcha"></img></button>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control col-md-3" id="txtCaptcha1" name="txtCaptcha" maxlength="7" type="text" value="" />&nbsp;
                                        <span class="field-validation-valid field-validation-error" id="txtCaptcha"></span>
                                    </div>
                                   <div class="col-md-3">
                                      <input id="SendOTPbtn" type="button" class="btn-sm btn-primary" value="Send OTP" onclick="emptyCheck();" />  
                                   </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 form-group">
                                <div id="OTPView" class="col-md-10 input-group"></div>
                            </div>

                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="input-group col-sm-offset-1 col-sm-10 col-md-10" style="margin-top:6%">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" id="newPassword1" name="newPassword" maxlength="20" placeholder="Create new password" type="password" onblur="checkPassword();" />
                                </div>
                                <div style="color:Red;margin-bottom:0px;text-align:center">
                                    <span class="field-validation-valid field-validation-error" id="newPassword"></span>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="input-group col-sm-offset-1 col-sm-10 col-md-10" style="margin-top:6%">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" id="confirmPassword1" name="confirmPassword" maxlength="20" placeholder="Confirm password" type="password" onblur="checkPassword();" />
                                </div>
                                <div style="color:Red;margin-bottom:0px;text-align:center">
                                    <span class="field-validation-valid field-validation-error" id="confirmPassword"></span>
                                </div>
                            </div>

                            <div class="col-sm-11 col-md-11 controls" style="margin-bottom:10px">
                                <button type="button" class="btn btn-primary pull-right" id="btnSubmit" onclick="resetPassword();"><i class="glyphicon glyphicon-log-in"></i>Reset Password</button>
                            </div>

                        </div>
                    </div>
                </div>
</form>
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
    <script src="jquery.unobtrusive-ajax.min.js"></script>
    <script src="ui.js"></script>


    <script src="toastr.js"></script>
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

    // Remove the spaces from the entered and generated code
    function removeSpaces(string)
    {
        return string.split(' ').join('');
    }

function emptyCheck() {
var mobile=document.getElementById('mobile1').value;
var captcha=document.getElementById('txtCaptcha1').value;
if(mobile=="" || captcha=="")
 {
  if(mobile=="") document.getElementById('mobile').innerHTML='The Mobile Number field is required';
  else document.getElementById('mobile').innerHTML='';
  if(captcha=="") document.getElementById('txtCaptcha').innerHTML='The Captcha field is required';
  else document.getElementById('txtCaptcha').innerHTML='';
 }
 else if(mobile!="" && captcha!="")
 {
  document.getElementById('mobile').innerHTML='';
  document.getElementById('txtCaptcha').innerHTML='';
  var str1 = removeSpaces(document.getElementById('imgCaptcha1').value);
  var str2 = removeSpaces(document.getElementById('txtCaptcha1').value);
  if(!mobile.match(/^[0-9]+$/) || mobile.length!=10) document.getElementById('mobile').innerHTML='Please enter valid mobile number';
  else if (str1!=str2) document.getElementById('txtCaptcha').innerHTML='Enter correct Captcha';
  else
  {
    var url="registervalidate.php?mob="+mobile;
    var xmlhttp;
    if (window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
    else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.open('GET',url,true);
    xmlhttp.onreadystatechange=function() {
     if(xmlhttp.readyState==4) 
     {
      if(xmlhttp.responseText=="This Mobile Number is already registered")
      {
       
       showSuccessToast("Successfully sent.");
       document.getElementById('mobile1').readOnly=true;
       document.getElementById('txtCaptcha1').readOnly=true;
       document.getElementById('txtCaptcha1').value="";
       document.getElementById('SendOTPbtn').disabled=true;
       document.getElementById('newPassword1').disabled=false;
       document.getElementById('confirmPassword1').disabled=false;
       document.getElementById('btnSubmit').disabled=false;
       document.getElementById('divCaptcha').style.display='none';
      }
      else if(xmlhttp.responseText=="This Mobile Number is not registered")
      {
        showErrorToast(xmlhttp.responseText);
        DrawCaptcha();
        document.getElementById('txtCaptcha1').value="";
      }
     }
   }
   xmlhttp.send(url);
  }
 }
}
</script>

<script>
function checkPassword(){
var newpassword=document.getElementById('newPassword1').value;
var confirmpassword=document.getElementById('confirmPassword1').value;
if(newpassword!="")
 {
  if(newpassword.length<6 || newpassword.length>20) document.getElementById('newPassword').innerHTML="Password must be 6 to 20 characters";
  else document.getElementById('newPassword').innerHTML="";
 }
else document.getElementById('newPassword').innerHTML="";
if(confirmpassword!="")
 {
   if(confirmpassword!=newpassword) document.getElementById('confirmPassword').innerHTML="Confirm password is not same";
   else document.getElementById('confirmPassword').innerHTML="";
 }
else document.getElementById('confirmPassword').innerHTML="";
}
</script>

<script>
function resetPassword(){
var mob=document.getElementById('mobile1').value;
var newpass=document.getElementById('newPassword1').value;
var confirmpass=document.getElementById('confirmPassword1').value;
if(mob=="" || newpass=="" || confirmpass=="") showErrorToast("Please fill all info");
if(mob!="" && newpass!="" && confirmpass!="")
{
  if(document.getElementById('newPassword').innerHTML=="Password must be 6 to 20 characters" || document.getElementById('confirmPassword').innerHTML=="Confirm password is not same")
     showErrorToast("Please fill in correct format");
  else
  { 
     var url="resetpass.php?mob="+mob+"&pass="+newpass;
     var xmlhttp;
     if(window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
     else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
     xmlhttp.open('GET',url,true);
     xmlhttp.onreadystatechange=function() {
     if(xmlhttp.readyState==4 && xmlhttp.status==200) 
     {
      if(xmlhttp.responseText=="Password changed successfully") {alert(xmlhttp.responseText); window.location.href="login.php";}
      else showErrorToast("Error occured");
     }
   }
   xmlhttp.send(url);
   }
 }
}
</script>

<script>

        $(document).ready(function () {
            $("#newPassword1").prop("disabled", true)
            $("#confirmPassword1").prop("disabled", true)
            $("#btnSubmit").prop("disabled", true)
        });

</script>
</body>
</html>