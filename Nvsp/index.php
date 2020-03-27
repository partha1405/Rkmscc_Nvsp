
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
                    <a href="Nvsp_Overview.docx">Contacts</a>
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

    Home
</li>
          </ul>
        </div>
        
  


  <section class="ls section_padding_top_20 section_padding_bottom_10">
    <div class="container-fluid">
        <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">

            <div class="isotope-item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="after_cover hoverable-banner overflow_hidden">
                        <table class="bottommargin_10 table table-hover" id="table-color">
                            <thead>
                                <tr>
                                    <th class="rounded-top-left-right">

                                        <h5 class="bottommargin_0 text-center line-height-body-default">
                                            
                                            Login/Register to Avail following Facilities
                                        </h5>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> &nbsp;Registration for new elector</label></td>

                                </tr>
                                <tr>
                                    <td><label><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> &nbsp;Registration of overseas elector</label></td>

                                </tr>
                                <tr>
                                    <td><label><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> &nbsp;Deletion or Objection in Electoral Roll</label></td>

                                </tr>
                                <tr>
                                    <td><label><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> &nbsp;Correction of Entries</label></td>

                                </tr>
                                <tr>
                                    <td><label><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> &nbsp;Transposition within AC</label></td>

                                </tr>
                                <tr>
                                    <td><label><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> &nbsp;Migration to another AC</label></td>

                                </tr>
                                
                                <tr class="text-center">
                                    <td><a href="login.php" class="btn btn-info btn-block">Login/Register</a></td>

                                </tr>


                            </tbody>
                        </table>




                    
                </div>


                
            </div>

            

                    <div class="isotope-item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="with_padding rounded overflow_hidden main_bg_color after_cover with_radial_highlight hoverable-banner with_image">
                            <div class="bg_teaser">
                                <img src="banner3.png" />
                            </div>
                            <h4 class="semibold topmargin_0">
                                <span class="number">02</span>
                                Electors Verification Program
                            </h4>

                            <div class="media-links">
                                <a href="#" class="abs-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="with_padding rounded overflow_hidden main_bg_color3 after_cover with_radial_highlight hoverable-banner with_image">
                            <div class="bg_teaser">
                                <img src="banner1.png" />
                            </div>
                            <h4 class="semibold topmargin_0">
                                <span class="number">02</span>
                                Search in <br>Electoral <br>Roll
                            </h4>

                            <div class="media-links">
                                <a href="http://electoralsearch.in/" class="abs-link" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="with_padding rounded overflow_hidden main_bg_color after_cover with_radial_highlight hoverable-banner with_image">
                            <div class="bg_teaser">
                                <img src="banner3.png" />
                            </div>
                            <h4 class="semibold topmargin_0 bottommargin_5">
                                <span class="number">04</span>
                                Forms
                            </h4>

                            <div class="media-links">
                                <a href="#" target="_blank" class="abs-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="with_padding rounded overflow_hidden main_bg_color2 after_cover with_radial_highlight hoverable-banner with_image">
                            <div class="bg_teaser">

                                <img src="banner2.png" />
                            </div>
                            <h4 class="semibold topmargin_0">
                                <span class="number">03</span>
                                Track Application Status
                            </h4>

                            <div class="media-links">
                                <a href="#" target="_blank"
                                   class="abs-link"></a>
                            </div>
                        </div>
                    </div>


                    <div class="isotope-item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="with_padding rounded overflow_hidden main_bg_color4 after_cover with_radial_highlight hoverable-banner with_image">
                            <div class="bg_teaser">
                                <img src="banner5.png" />
                            </div>
                            <h4 class="semibold topmargin_0">
                                <span class="number">06</span>
                                Download Electoral <br>Roll PDF
                            </h4>

                            <div class="media-links">
                                <a href="#" class="abs-link"></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="isotope-item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="with_padding rounded overflow_hidden main_bg_color5 after_cover with_radial_highlight hoverable-banner with_image">
                            <div class="bg_teaser">
                                <img src="banner4.png" />
                            </div>
                            <h4 class="semibold topmargin_0">
                                <span class="number">05</span>
                                Know Your
                            </h4>
                            <ul>
                                <li>Assembly/Parliamentary Constituency Details</li>
                                <li>BLO/Electoral Officers Details</li>
                                <li>Political Party Representative</li>
                            </ul>

                            <div class="media-links">
                                <a href="#" class="abs-link"
                                   target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

  <footer class="ds parallax clear_parallax page_features columns_margin_bottom_30">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="thin" style="font-size:22px">Other Important</h2>

          <a href="https://eci.gov.in/" class="theme_button color1" target="_blank">
            <i class="rt-icon2-link"></i>Link to States/UT CEO's
          </a>
          <a href="https://ecisveep.nic.in/" class="theme_button color2" target="_blank">
            <i class="rt-icon2-star-outline"></i> Voter Education
          </a>
          <a href="https://eci.gov.in/files/category/125-poll-process/" class="theme_button color1" target="_blank">
            <i class="fa fa-external-link"></i> Polling Process
          </a>
          <a href="https://eci.gov.in/evm/" class="theme_button color2" target="_blank">
            <i class="fa fa-info-circle"></i>EVM Machine
          </a>
          <a href="https://eci.gov.in/contact-us/ngsp/national-grievance-services-portal-r3/" class="theme_button color1" target="_blank">
            <i class="fa fa-info-circle"></i>Complains & Suggestions
          </a>
        </div>
      </div>
    </div>
  </footer>

<div id="NVSP_Modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div id="nvsp_info">
                    <div id="welcomeDialog" style="margin-top: 0px;">
                        <div class="main" style="background-color: white;color: black;">
                            <div style="padding:15px 15px 15px;border: 4px solid rgb(42, 127, 200);color: white;">
                                <h4 style="color: rgb(234, 99, 99);">Welcome to Electors Verification Program</h4>

                                <div style="text-align: right">
                                    <input style="background-color: #ED5757; color: white;max-width: 12.6em;white-space: normal; padding-left: 2.2em; padding-right: 2.2em;" type="button" id="continue" value="???? ???? Continue" class="" data-dismiss="modal">
                                </div>
                            </div>
                        </div>
                    </div>


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