<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

  <title>Home Page</title>
    

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

    Verify Self Details
</li>
          </ul>
        </div>
        
  <div class="container padding_40">
    <div>

      
      <div id="dvLoading" class="loader"> </div>

      <div id="" class="">

        <div class="panel panel-primary no-border-radius">
          <div class="panel-heading">
            <div class="panel-title text-center">
              <span>My Details</span>
            </div>
          </div>
          <div class="panel-body">
<?php
if(isset($_SESSION["userid"],$_SESSION["password"]))
{
$mobile=$_SESSION["mobile"];
$firstnm=$_SESSION["firstnm"];
$lastnm=$_SESSION["lastnm"];
$epic=$_SESSION["epic"];
$email=$_SESSION["email"];
if($epic!="")
{
define("HostName","localhost");
define("UserName","root");
define("Password","");
define("DbName","userdb");
$con=mysqli_connect(HostName,UserName,Password) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,DbName) or die("Failed to connect to database: ");
$sql="SELECT epicno,acno,partno,slno,status FROM detail WHERE epic='$epic' AND epicno='$epic'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>=1)
{          
            echo "<table class='table table-bordered table-condensed table-striped table-th-center'>
              <thead class='bg-info text-white'>
                <tr>
                  <th>EpicNo</th>
                  <th>AcNo</th>
                  <th>PartNo</th>
                  <th>SlNo</th>
                  <th>Verification & Authentication Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>";
 while($row=mysqli_fetch_array($result))
  {
  $epicno=$row["epicno"];
  $acno=$row["acno"];
  $partno=$row["partno"];
  $slno=$row["slno"];
  $status=$row["status"];
                echo "<tr>";
                  echo "<td>".$epicno."</td>";
                  echo "<td>".$acno."</td>";
                  echo "<td>".$partno."</td>";
                  echo "<td>".$slno."</td>";
                  echo "<td class='text-center'>".$status."</td>";
                  echo "<td class='col-action'><a href='verification.php?id=".$epicno."'>View Details</a></td>";        
                echo "</tr>";
}
             echo "</tbody>
            </table>";
}
else echo "<h4 style='color:red;'>No record found</h4>";
mysqli_close($con);
}
else echo "<h4 style='color:red;'>No record found</h4>";
}
?>
          </div>
        </div>

          
      </div>


    </div>

    <div id="VerificationModal" class="modal fade">
      <div class="modal-dialog modal-md" style="left:-15%; bottom:-5%">
        <!-- Modal content-->
        <div class="modal-content" style="width: 180%;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Voter Verification</h4>
          </div>
          <div id="VerificationPartial" class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="ListPartial"> 
<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];
if($id!="")
{
define("Hostnm","localhost");
define("Usernm","root");
define("Passwd","");
define("Dbnm","userdb");
$con=mysqli_connect(Hostnm,Usernm,Passwd) or die("Failed to connect to MySQL: "); 
mysqli_select_db($con,Dbnm) or die("Failed to connect to database: ");
$sql="SELECT epicno,first_nm,last_nm,first_rl,last_rl,type_rl,age,gender,address,photo FROM verify WHERE  epicno='$id'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>=1)
{
  if($rowx=mysqli_fetch_array($result))
  {
  $epicnox=$rowx["epicno"];
  $firstnmx=$rowx["first_nm"];
  $lastnmx=$rowx["last_nm"];
  $firstrlx=$rowx["first_rl"];
  $lastrlx=$rowx["last_rl"];
  $typerlx=$rowx["type_rl"];
  $agex=$rowx["age"];
  $genderx=$rowx["gender"];
  $addressx=$rowx["address"];
  $photox=base64_encode($rowx["photo"]);
  echo "<div class='panel-body'>";
     echo "<div class='row'>";
       echo "<div class='col-md-2 col-sm-12 col-xs-12'></div>";
         echo "<div class='col-md-8 col-sm-12 col-xs-12'>";
           echo "<div class='table-responsive'>";
              echo "<table  class='table table-condensed table-hover table-striped'>";
                    echo "<tr>";
                     echo "<td>Epic No :</td>";
                     echo "<td>".$epicnox."</td>";
                   echo "</tr>";
                   echo "<tr>";
                     echo "<td>Name :</td>";
                     echo "<td>".$firstnmx." ".$lastnmx."</td>";
                   echo "</tr>";
                   echo "<tr>";
                     echo "<td>Relative Name :</td>";
                     echo "<td>".$firstrlx." ".$lastrlx."</td>";
                   echo " </tr>";
                     echo "<tr>";
                         echo "<td>Relation Type :</td>";
                         echo "<td>".$typerlx."</td>";
                     echo "</tr>";
                     echo "<tr>";
                         echo "<td>Age :</td>";
                         echo "<td>".$agex."</td>";
                     echo "</tr>";
                     echo "<tr>";
                         echo "<td>Gender :</td>";
                         echo "<td>".$genderx."</td>";
                     echo "</tr>";
                     echo "<tr>";
                         echo "<td>Address :</td>";
                         echo "<td>".$addressx."</td>";
                     echo "</tr>";
                     echo "<tr>";
                         echo "<td></td>";
                         echo "<td>".'<img src="data:image/jpeg;base64,'.$photox.'" style="height:200px; width:200px;"/>'."</td>";
                     echo "</tr>";
                 echo "</table>"; 
            echo "</div>"; 
       echo "</div>"; 
     echo "</div>"; 
   echo "</div>"; 
echo "</div>";                       
 }
}
else echo "<h4 style='color:red;text-align:center;'>No record found</h4>";
mysqli_close($con);
}
}
?>
    </div>

          <div class="col-md-12">
              <h5>
                  You have completed your Verification process.
                  <label>For providing Polling station suggestions</label>
                  <a href="#">Click here</a>
              </h5>
          </div>
    <input type="hidden" id="verificationType" value="V" />
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
  <script src="jquery.unobtrusive-ajax.min.js"></script>
  <script src="jquery-ui.min.js"></script>

  <script src="ui.js"></script>
  <script>
    //for checking browser enables popup
    //var isPopupAllowed = false;
    //function checkPopAllowed() {

    //  isPopupAllowed = false;
    //  var r = window.open("", "_blank");
    //  if (r != null && typeof r != 'undefined') {
    //    r.close();
    //    isPopupAllowed = true;
    //  } else {
    //    //Broswer has blocked it
    //    isPopupAllowed = false;
    //    alert('Please allow popups for this site');
    //  }
    //}

    //$(document).ready(function () {
    //  //checkPopAllowed();
    //})

    var isSelfVerification = true;;
    function resetVerifyView(selfVerify) {
      isSelfVerification = selfVerify;
      $('#ListPartial').hide();
    }

    var selectedRow = 0; // for family members row
    function fetchDetailByEpic(url, epic, rowNumber) {

      var epic_no = epic;
      if (epic == null || typeof epic == 'undefined' || epic == '') {
        //epic_no = $("#ObjectorEpicNo").val();
        showErrorToast("Epic No is not valid...!!");
        return false;
      }
      url = url + '?epic_no=' + epic_no;
      selectedRow = 0;
      showProgress();
      $.ajax({
        type: "GET",
        url: url
      }).done(function (partialView) {
        $('#ListPartial').empty().html(partialView).show();
        if (!isSelfVerification) {
          selectedRow = rowNumber;
        }
        hideProgress();
      }).fail(function (jqXhr, errorStatus, error) {
        showErrorToast("Something went wrong, try after sometime");
        hideProgress();
      });
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