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

  <title>Family_Details</title>
    

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
  
  <link href="/Content/css/bootstrap-flatly.min.css" rel="stylesheet" />
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
    .mformTextbox {
      border: none;
    }
  </style>


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
              <a href="home.php" class="logo top_logo">

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

        <a href="userindex.php" title="EVP Home">EVP Home</a>
         &gt; 

        <a href="getfamily_indexview.php" title="Family Listing and Authentication">Family Listing and Authentication</a>
         &gt; 

    Family Verification
</li>
          </ul>
        </div>
        

  <div class="container">
     
      
        <div id="TaggedList" style="margin-top:2%">
            <div class="panel panel-primary no-border-radius">
                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <span>Family Verification</span>
                    </div>
                </div>
               
                    <div class="panel-body">
                        
                        <div id="FamilyMembersList">
                          
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form>
                                      <table id='familyTable' class='table table-bordered table-hover table-striped table-th-center'>
                                            <tr>
                                                    <th style="width:15%">Enter Epic NO</th>
                                                    <th><input type="text" id="familyEpic" style="width:40%" />&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input type="button" id="verification" value="Search" onclick="showVoter();" />
                                                    </th>
                                           </tr>
                                    </table>
                                    <div id="txtHint"></div>
                                    </form>
                                </div>

                            </div>
                        </div>
                  </div>    

                </div>
            </div>
<div id="PWDModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-11 text-center">
                        <h5 class="modal-title">
                            PWD Marking
                        </h5>
                    </div>
                    <div class="col-md-1 text-right">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div id="mark_pwd_partial"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div id="ASDModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-11 text-center">
                        <h5 class="modal-title">
                            ASD Marking
                        </h5>
                    </div>
                    <div class="col-md-1 text-right">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div id="mark_asd_partial"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
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
                <a href="/" class="logo top_logo small_logo 0">

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
  <script src="jquery.validate.unobtrusive.js" type="text/javascript"></script>
  <script src="jquery.unobtrusive-ajax.min.js"></script>

<script type="text/javascript">
function showVoter() {
 var epic=document.getElementById('familyEpic').value;
 if(epic=="") 
{
  document.getElementById("txtHint").innerHTML="";
  return;
 }
var url="getfamily_search.php?epic="+epic;
 var xmlhttp;
 if (window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
 else if (window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 xmlhttp.open('GET',url,true);
 xmlhttp.onreadystatechange=function() {
 if (xmlhttp.readyState==4 && xmlhttp.status==200) document.getElementById('txtHint').innerHTML=xmlhttp.responseText;
 }
 xmlhttp.send();
define('SCRIPT_DEBUG',true);
}
</script>
 

<script>
function familyStatus() {
var epicno=document.getElementById('familyEpic').value;
if(epicno!="")
{
if(document.getElementById('correct').checked==true && document.getElementById('incorrect').checked==false)
{
   var submission=document.getElementById('correct').value; 
   var url="getfamily_insert.php?familyepic="+epicno+"&submission="+submission;
   var xmlhttp;
    if(window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
    else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.open('GET',url,true);
    xmlhttp.onreadystatechange=function() {
     if(xmlhttp.readyState==4) 
     {
     alert(xmlhttp.responseText);
     }
   }
   xmlhttp.send(url);
  }
else if(document.getElementById('incorrect').checked==true && document.getElementById('correct').checked==false)
{
   var submission=document.getElementById('incorrect').value; 
   var url="getfamily_insert.php?familyepic="+epicno+"&submission="+submission;
   var xmlhttp;
    if(window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
    else if(window.ActiveXObject) xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.open('GET',url,true);
    xmlhttp.onreadystatechange=function() {
     if(xmlhttp.readyState==4) 
     {
     alert(xmlhttp.responseText);
     }
   }
   xmlhttp.send(url);
  }
else if(document.getElementById('incorrect').checked==false && document.getElementById('correct').checked==false) showErrorToast("Check the correct radio button");
 }
}
</script>
 
</body>
</html>