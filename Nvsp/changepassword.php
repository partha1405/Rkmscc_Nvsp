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
?>


<!DOCTYPE html>
<html>
<head>

  <title>ChangePassword</title>
    

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
  
  <link href="/Content/fontawesome-5/css/all.min.css" rel="stylesheet" />
  
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
                      
                      <li><a href="#">Track status</a></li>
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

        <a href="myprofile.php" title="My Profile">My Profile</a>
         &gt; 

    Change Password
</li>
          </ul>
        </div>
        

    <div>
        
		
    </div>
    <div class="container">
        <div class="row main">

<form action="/Account/ChangePassword" class="form-horizontal" method="post" role="form"><input name="__RequestVerificationToken" type="hidden" value="VKXtEFqxrSV2L3cEfMSXwLQo4gS-ue18RIPpQsF3cVCEMyiBA2CtbO1ioWx7iOtGCS3Phhl02mwxlsxNPLXzVFWwQondwgfxhO2HXvt1vybi5epdp6iXPhquhXm1TXedoChyEYWrsd3dq1h428MwgRhEut2CBISQNdhkc2J_t5Q1" />                <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                    <div class="panel panel-primary" style="border-style:solid;box-shadow: 0 3px 8px 0 #ccc !important;">
                        <div class="panel-heading easternblue">
                            <div class="panel-title text-center">Change Password</div>
                        </div>
                        <div class="panel-body" style="padding-bottom:0;padding-top: 2px ;padding-left:10px;padding-right:10px">

                            <span>* NOTE - Password must contain minimum 6 characters at least 1 Uppercase Alphabet, 1 digit and 1 Special Character </span>

                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="input-group col-sm-offset-1 col-sm-10 col-md-10" style="margin-top:6%">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" id="oldPassword1" name="oldPassword" maxlength="20" placeholder="Old Password" type="password" onblur="validation('oldPassword',this.value);" />
                                </div>
                                <div style="color:Red;margin-bottom:0px;text-align:center">
                                    <span class="field-validation-valid field-validation-error" id="oldPassword"></span>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="input-group col-sm-offset-1 col-sm-10 col-md-10" style="margin-top:6%">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" id="newPassword1" name="newPassword" maxlength="20" placeholder="New Password" type="password" onblur="validation('newPassword',this.value);" />
                                </div>
                                <div style="color:Red;margin-bottom:0px;text-align:center">
                                    <span class="field-validation-valid field-validation-error" id="newPassword"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="input-group col-sm-offset-1 col-sm-10 col-md-10" style="margin-top:6%">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" id="confirmPassword1" name="confirmPassword" maxlength="20" placeholder="Confirm New Password" type="password" onblur="checkPassword();" />
                                </div>
                                <div style="color:Red;margin-bottom:0px;text-align:center">
                                    <span class="field-validation-valid field-validation-error" id="confirmPassword"></span>
                                </div>
                            </div>

                            <div class="col-sm-11 col-md-11 controls" style="margin-bottom:10px">
                                <button type="button" class="btn btn-primary pull-right" onclick="changePassword();"><i class="glyphicon glyphicon-log-in"></i> Change Password</button>
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
  

<script src="jquery.validate.min.js"></script>
<script src="jquery.validate.unobtrusive.min.js"></script>


<script>
function validation(field,query) {
var url="changevalidate.php?field=" + field + "&query=" + query;
var xmlhttp;
if (window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
xmlhttp.open('GET',url,true);
xmlhttp.onreadystatechange=function() {
 if(xmlhttp.readyState == 4 && xmlhttp.status==200)
document.getElementById(field).innerHTML=xmlhttp.responseText;
}
xmlhttp.send(url)
}
</script>


<script>
function checkPassword() {
var pass=document.getElementById('newPassword1').value;
var cpass=document.getElementById('confirmPassword1').value;
if(pass!="" && cpass!="")
{
 if(cpass!=pass) document.getElementById('confirmPassword').innerHTML="Confirm password is not same";
 else if(cpass==pass)document.getElementById('confirmPassword').innerHTML="";
}
else document.getElementById('confirmPassword').innerHTML="";
}
</script>

<script>
function changePassword(){
var oldpass=document.getElementById('oldPassword1').value;
var newpass=document.getElementById('newPassword1').value;
var confirmpass=document.getElementById('confirmPassword1').value;
if(oldpass=="" || newpass=="" || confirmpass=="") showErrorToast("Please fill all info");
else if(oldpass!="" && newpass!="" && confirmpass!="")
 {
   if(document.getElementById('oldPassword').innerHTML=="Old password does not match" || document.getElementById('newPassword').innerHTML=="Password must not be lesser than six character and greater than twenty character" || document.getElementById('confirmPassword').innerHTML=="Confirm password is not same")
      showErrorToast("Please fill in correct format");
    else
     {
         var url="changepass.php?pass="+newpass;
         var xmlhttp;
         if(window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
         else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
         xmlhttp.open('GET',url,true);
         xmlhttp.onreadystatechange=function() {
         if(xmlhttp.readyState==4) 
         { 
             if(xmlhttp.responseText=="Password changed successfully") {alert(xmlhttp.responseText); window.location.href="login.php";}
             else showWarningToast("Error ocured");
         }
        }
        xmlhttp.send(url);       
     }
  }
}
</script>



  <script type="text/javascript">
    $(".Datevalidate").change(function () {
      var dateInput = $(this).val();
      if (dateInput.length == 10) {
        var dateReg = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{4})$/;
        var data = dateInput.match(dateReg)
        if (!data) {
          showWarningToast('Please enter valid date.');
          $(this).val('');
        }
      }
      else {
        showWarningToast('Please enter valid date.');
        $(this).val('');
      }
    });

    $('#btnIncFont').click(function () {
      //
      var selectedFont = $('body').css('font-size');
      if (selectedFont != "18px")    /*New code to fix the bug of increase font size Reena Rana 29 Aug 2018*/
        $('body').css('font-size', (parseInt(selectedFont) + 1));
      else {
        console.log("inseide else" + selectedFont);
      }
    });

    //$('#btnOk').click(function () {

    //  $('#knowAcModal').hide();
    //});

    $('#btnDecFont').click(function () {
      var selectedFont = $('body').css('font-size');
      if (selectedFont != "10px")  /*New code to fix the bug of decrease font size Reena Rana 29 Aug 2018*/
        $('body').css('font-size', (parseInt(selectedFont) - 1));
      else {
        console.log("inseide else" + selectedFont);
      }
    });
  </script>
</body>
</html>