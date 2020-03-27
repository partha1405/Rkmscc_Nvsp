
<!DOCTYPE html>
<html>
<head>

  <title>REGISTER</title>
    

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

        <a href="login.php" title="Login">Login</a>
         &gt; 

    Register
</li>
          </ul>
        </div>
        

   <div class="form-group">
	
   </div>
  
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="bottommargin_10 col-md-12 text-center">
              <i class="fa fa-4x fa-user-plus text-primary"></i>
            </div>
<form class="form-horizontal" role="form" name="RegisterForm"><div class="validation-summary-valid text-danger" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div><input name="__RequestVerificationToken" type="hidden" value="SH3yhylo-B_wki1dveLbH3JS1D6tVmscdcQlp12UX3eNtmKbtBIelIadNmhgLQXVXEqTA9AoQYZl62P8IUqVNqmxRy827TXC63uu7gHV-t6MmqhXHwbmR7GgSvP2DDgam0QeG0FY7XVE2H0jBHAlF6-jzv0dlrV_pLtjy66AkMU1" />                <div class="form-group">
                    
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label>Mobile No</label>
                        </div>
                        <div class="col-md-9">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-lg fa-phone" aria-hidden="true"></i></span>
                                <span class="input-group-addon">+91</span>
                                

                                <input class="form-control" id="mobile1" name="mobile" maxlength="10" placeholder="Enter Mobile number" type="text" value="" pattern="[0-9]{1}[0-9]{9}" />
                            </div>
                            <div class="text-danger text-center">
                                <span class="field-validation-valid field-validation-error" id="mobile"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-group" id="divCaptcha">
                    <div class="col-md-12">

                        <div class="col-md-5 col-md-offset-3">
                            <label>Captcha</label>
	         <input id="imgCaptcha1" name="imgCaptcha" style="width:100px; color:red;" type="text" disabled />
                             <button class="btn btn-sm btn-link" id="imgRefresh" type="button" onclick="DrawCaptcha();"><img src="reload.jpg" alt="Captcha"></img></button>
                        </div>

                        <div class="col-md-3">
                            <input class="form-control col-md-3" id="txtCaptcha1" maxlength="7" name="txtCaptcha" type="text" value="" />
                            <span class="field-validation-valid field-validation-error" id="txtCaptcha"></span>
                        </div>

                   </div>

                    </div>
                    <div class="form-group" id="divOtp">
                        <div class="col-md-12">
                            <div class="col-md-9">
                                <div id="OTPView" class="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="SendOTPbtn" class="btn-sm btn-primary" onclick="emptyCheck();">Send OTP</button>
                            </div>

                        </div>
                    </div>
                    <div id="divDetails">


                        <div class="form-group" id="divEpicNonEpic" style="display:none;">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <input id="epic1" name="epicNonepic" type="radio" value="True" onchange="radioCheck(this.value)" />
                                    <label>
                                        I have EPIC number
                                    </label>           
                                </div>
                                <div class="col-md-4">
                                    <input id="nonepic1" name="epicNonepic" type="radio" value="False" onchange="radioCheck(this.value)" />
                                    <label>
                                        I don't have EPIC number
                                    </label>
                               </div>
                            </div>
                        </div>


                        <div id="divName" style="display:none;">

                            <div class="form-group">
                                
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <label>
                                            First Name
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon"><i class="fa fa-lg fa-user-o" aria-hidden="false"></i></span>
                                            <input class="form-control" id="firstName1" name="firstName" placeholder="Enter first name" type="text" value="" />
                                        </div>
                                        <div class="text-danger text-center">
                                            <span class="field-validation-valid field-validation-error" id="firstName"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <label>
                                            Last Name
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon"><i class="fa fa-lg fa-user-o" aria-hidden="false"></i></span>
                                            <input class="form-control" id="lastName1" name="lastName" placeholder="Enter last name" type="text" value="" />
                                        </div>
                                        <div class="text-danger text-center">
                                            <span class="field-validation-valid field-validation-error" id="lastName"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="form-group" id="divEpic" style="display:none;">

                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label>Epic Number</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon"><i class="fa fa-lg fa-id-card-o" aria-hidden="false"></i></span>
                                        <input class="form-control" id="epicno1" name="epicno" placeholder="Enter EPIC Number" type="text" value="" onblur="validation('epicno',this.value);" />
                                    </div>
                                    <div class="text-danger text-center">
                                        <span class="field-validation-valid field-validation-error" id="epicno"></span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group" id="divEmail" style="display:none;">
                            
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></span>
                                        <input class="form-control" id="email1" name="email" placeholder="Enter Email" type="text" value="" onblur="validation('email',this.value);" />
                                    </div>
                                    <div class="text-danger text-center">
                                        <span class="field-validation-valid field-validation-error" id="email"></span>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="form-group" id="divNewPassword" style="display:none;">

                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input class="form-control" id="password1" name="password" maxlength="20" placeholder="Enter Password" type="password" onblur="validation('password',this.value);" />
                                    </div>
                                    <div class="text-danger text-center">
                                        <span class="field-validation-valid field-validation-error" id="password"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group" id="divConfirmPassword" style="display:none;">
                            
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label>Confirm Password</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input class="form-control" id="cpassword1" name="cpassword" maxlength="20" placeholder="Confirm Password" type="password" onblur="checkPassword();" />
                                    </div>
                                    <div class="text-danger text-center">
                                        <span class="field-validation-valid field-validation-error" id="cpassword"></span>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="form-group" id="divRegisterButton" style="display:none;">
                            <div class="col-md-12">
                                <button type="button" id="registerbtn" class="btn btn-primary btn-block login-button" onclick="registerDetail();">
                                    Register
                                </button>

                            </div>
                        </div>




                    </div>
</form>                    <div class="main-login main-center" id="divPasswordPattern" style="max-height:100%; display:none;">


                        <div>
                            Password Pattern :

                            <ul>
                                <li>Password must be at least 6 characters long.</li>
                                <li> Passwords must have at least one digit ('0'-'9').</li>
                                <li>Passwords must have at least one special character.</li>
                                <li>Passwords must have at least one uppercase ('A'-'Z').</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
        
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <br /><br />


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
  
<script src="jquery.validate.unobtrusive.min.js"></script>
<script src="jquery.unobtrusive-ajax.min.js"></script>
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
       showErrorToast(xmlhttp.responseText);
        DrawCaptcha();
        document.getElementById('txtCaptcha1').value="";
      }
      else if(xmlhttp.responseText=="This Mobile Number is not registered")
      {
       showSuccessToast("Successfully sent.");
       document.getElementById('mobile1').readOnly=true;
       document.getElementById('txtCaptcha1').readOnly=true;
       document.getElementById('txtCaptcha1').value="";
       document.getElementById('SendOTPbtn').disabled=true;
       document.getElementById('epic1').disabled=false;
       document.getElementById('nonepic1').disabled=false;
       document.getElementById('divCaptcha').style.display='none';
       document.getElementById('divOtp').style.display='none';
       document.getElementById('divEpicNonEpic').style.display='';
      }
     }
   }
   xmlhttp.send(url);
  }
 }
}
</script>

<script>
function emptyValue()
{
  document.getElementById('firstName1').value="";
  document.getElementById('lastName1').value="";
  document.getElementById('epicno1').value="";
  document.getElementById('email1').value="";
  document.getElementById('password1').value="";
  document.getElementById('cpassword1').value="";
}
function emptyText()
{
  document.getElementById('firstName').innerHTML="";
  document.getElementById('lastName').innerHTML="";
  document.getElementById('epicno').innerHTML="";
  document.getElementById('email').innerHTML="";
  document.getElementById('password').innerHTML="";
  document.getElementById('cpassword').innerHTML="";
}
function radioCheck(radioValue) {
if(radioValue=="True")
{
  emptyValue();
  emptyText();
  document.getElementById('firstName1').disabled=true;
  document.getElementById('lastName1').disabled=true;
  document.getElementById('epicno1').disabled=false;
  document.getElementById('email1').disabled=false;
  document.getElementById('password1').disabled=false;
  document.getElementById('cpassword1').disabled=false;
  document.getElementById('registerbtn').disabled=false;
  document.getElementById('divName').style.display='none';
  document.getElementById('divEpic').style.display='';
  document.getElementById('divEmail').style.display='';
  document.getElementById('divNewPassword').style.display='';
  document.getElementById('divConfirmPassword').style.display='';
  document.getElementById('divRegisterButton').style.display='';
   document.getElementById('divPasswordPattern').style.display='';
}
else if(radioValue=="False")
{
  emptyValue();
  emptyText();
  document.getElementById('epicno1').disabled=true;
  document.getElementById('firstName1').disabled=false;
  document.getElementById('lastName1').disabled=false;
  document.getElementById('email1').disabled=false;
  document.getElementById('password1').disabled=false;
  document.getElementById('cpassword1').disabled=false;
  document.getElementById('registerbtn').disabled=false;
  document.getElementById('divEpic').style.display='none';
  document.getElementById('divName').style.display='';
  document.getElementById('divEmail').style.display='';
  document.getElementById('divNewPassword').style.display='';
  document.getElementById('divConfirmPassword').style.display='';
  document.getElementById('divRegisterButton').style.display='';
  document.getElementById('divPasswordPattern').style.display='';
}
}
</script>

<script>
function validation(field,query) {
var url="registrationvalidate.php?field=" + field + "&query=" + query;
var xmlhttp;
if (window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
xmlhttp.open('GET',url,true);
xmlhttp.onreadystatechange=function() {
 if(xmlhttp.readyState == 4 && xmlhttp.status==200)
document.getElementById(field).innerHTML=xmlhttp.responseText;
}
xmlhttp.send(url);
}
</script>

<script>
function checkPassword() {
var pass=document.getElementById('password1').value;
var cpass=document.getElementById('cpassword1').value;
if(pass!="" && cpass!="")
{
 if(cpass!=pass) document.getElementById('cpassword').innerHTML="Confirm password is not same with password";
 else if(cpass==pass)document.getElementById('cpassword').innerHTML="";
}
else document.getElementById('cpassword').innerHTML="";
}
</script>

<script>
function registerDetail() {
if(document.getElementById('epic1').checked==true && document.getElementById('nonepic1').checked==false)
{
 if(document.getElementById('epicno1').value=="" || document.getElementById('email1').value=="" || document.getElementById('password1').value=="" || document.getElementById('cpassword1').value=="")
  showErrorToast("Please fill all info");
 else if(document.getElementById('epicno').innerHTML=="Please enter correct Epic Number" || document.getElementById('email').innerHTML=="Invalid email id" || document.getElementById('password').innerHTML=="Password must not be lesser than six character and greater than twenty character" || document.getElementById('cpassword').innerHTML=="Confirm password is not same with password")
  showErrorToast("Please fill in correct format");
 else 
 { 
   var reg_mob=document.getElementById('mobile1').value;
   var reg_epc=document.getElementById('epicno1').value;
   var reg_eml=document.getElementById('email1').value;
   var reg_pass=document.getElementById('password1').value;
   var url="registerepic.php?mbl="+reg_mob+"&epc="+reg_epc+"&eml="+reg_eml+"&pass="+reg_pass;
   var xmlhttp;
    if(window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
    else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.open('GET',url,true);
    xmlhttp.onreadystatechange=function() {
     if(xmlhttp.readyState==4) 
     {
      if(xmlhttp.responseText=="This Epic Number is already registered") showErrorToast(xmlhttp.responseText);
      else if(xmlhttp.responseText=="This Email Id is already registered") showErrorToast(xmlhttp.responseText);
     else if(xmlhttp.responseText=="Error occured for registration") alert(xmlhttp.responseText);
     else if(xmlhttp.responseText=="Registered successfully") {alert(xmlhttp.responseText);window.location.href="login.php";}
     }
   }
   xmlhttp.send(url);
 }
}
if(document.getElementById('nonepic1').checked==true && document.getElementById('epic1').checked==false)
{
 if(document.getElementById('firstName1').value=="" || document.getElementById('lastName1').value=="" || document.getElementById('email1').value=="" || document.getElementById('password1').value=="" || document.getElementById('cpassword1').value=="")
  showErrorToast("Please fill all info");
 else if(document.getElementById('email').innerHTML=="Invalid email id" || document.getElementById('password').innerHTML=="Password must not be lesser than six character and greater than twenty character" || document.getElementById('cpassword').innerHTML=="Confirm password is not same with password")
  showErrorToast("Please fill in correct format");
 else 
 { 
   var regi_mob=document.getElementById('mobile1').value;
   var regi_fstnm=document.getElementById('firstName1').value;
   var regi_lstnm=document.getElementById('lastName1').value;
   var regi_eml=document.getElementById('email1').value;
   var regi_pass=document.getElementById('password1').value;
   var url="registernonepic.php?mbln="+regi_mob+"&fstnm="+regi_fstnm+"&lstnm="+regi_lstnm+"&emln="+regi_eml+"&passn="+regi_pass;
   var xmlhttp;
    if(window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
    else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.open('GET',url,true);
    xmlhttp.onreadystatechange=function() {
     if(xmlhttp.readyState==4) 
     {
     if(xmlhttp.responseText=="This Email Id is already registered") showErrorToast(xmlhttp.responseText);
     else if(xmlhttp.responseText=="Error occured for registration") alert(xmlhttp.responseText);
     else if(xmlhttp.responseText=="Registered successfully") {alert(xmlhttp.responseText);window.location.href="login.php";}
     }
   }
   xmlhttp.send(url);
 }
 }
}
</script>

<script>

        $(document).ready(function () {
        $("#divDetails *").prop('disabled', true);
 
      });
    </script>
</body>
</html>