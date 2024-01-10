<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmic Insurance</title>
    <link rel="stylesheet" href="assets/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/uikit-icons.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
</head>
<body>
<div class="uk-offcanvas-content">
      <header>
         <div class="uk-preserve-color uk-position-top">
            <!-- top nav -->
            <div class="uk-navbar-container uk-visible@m uk-small-nav">
               <ul class="small-nav-font uk-margin-remove" style="color:white;" uk-grid>
                  <li class="uk-width-2-3 uk-flex " style="padding-top: 10px; padding-bottom:6px;">
                     <div class="uk-margin-left">
                        <p class="uk-margin-remove "><i class="fa-solid fa-envelope uk-margin-small-right" ></i>infocosmicinsurance@gmail.com</p>
                     </div>
                     <div class="uk-margin-small-left uk-margin-small-right"> | </div>
                     <div>
                        <p class="uk-margin-remove "><i class="fa-solid fa-phone-volume uk-margin-small-right"></i> (+977) 5624 8956</p>
                     </div>
                  </li>
                  <li class="  uk-width-1-3" style="padding:10px 50px 10px 0px;">
                     <div class="uk-float-right uk-small-nav-icon">
                        <i class="fa-brands fa-facebook" ></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin"></i>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- end of top nav -->
            <!-- main  header-->
            <div>
               <nav class="uk-navbar-container  uk-sticky uk-sticky-fixed stroke shadow-lg"  uk-sticky="start: 100; animation: uk-animation-slide-top; sel-target: uk-navbar-container ; cls-active: uk-navbar-sticky scroll-nav; cls-inactive: uk-navbar-transparent ;" style="height:78px!important;">
                  <div class="uk-container uk-margin-small" >
                     <div uk-navbar=" dropbar: true ; target: !.uk-container-navbar; align: center; target-x: !.uk-navbar-container">
                        <div class="uk-navbar-left">
                           <button class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #nav-offcanvas" uk-navbar-toggle-icon></button>
                           <a class="uk-navbar-item uk-logo uk-margin-large-right" href="index.php">
                           <img src="assets/img/png-logo.png" alt="">
                           </a>
                        </div>
                        <div class="uk-navbar-right">
                           <a href="#" class="uk-hidden@m nav-primary-button" >Payment</a>
                           <div class=" uk-visible@m  ">
                              <ul class="uk-navbar-nav">
                                 <li class="uk-active"><a href="index.php">HOME</a></li>
                                 <li>
                                    <a href="about.php">ABOUT</a>
                                 </li>
                                 <li>
                                    <a href="#">SERVICES<span uk-icon="icon: triangle-down; ratio: .75;"></span></a>
                                    <div class="uk-padding-small" uk-dropdown="delay-hide: 5; animation: uk-animation-slide-bottom-small; duration: 100; animate-out: true" style="min-width: 200px;">
                                       <ul class="uk-nav uk-dropdown-nav">
                                          <li><a href="service-inner.php" >DMV Insurance</a></li>
                                          <li><a href="service-inner.php" >TLC Insurance</a></li>
                                          <li><a href="service-inner.php" >Commerical Auto</a></li>
                                          <li><a href="service-inner.php" >Other Services</a></li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li>
                                    <a href="contact.php">CONTACT</a>
                                 </li>
                                 <li>
                                    <a href="#"><button class="nav-primary-button para-font">PAYMENT</button></a>
                                 </li>
                                <!-- search -->
                                 <!-- <li>
                                    <a class="uk-navbar-toggle navbar-button" href="#" uk-search-icon></a>
                                    <div class="uk-navbar-dropdown uk-padding-small uk-margin-remove" uk-drop="mode: click;cls-drop: uk-navbar-dropdown;boundary: .navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                       <div class="uk-container">
                                          <div class="uk-grid-small uk-flex-middle" uk-grid>
                                             <div class="uk-width-expand">
                                                <form class="uk-search uk-search-navbar uk-width-1-1 uk-navbar-search">
                                                   <input class="uk-search-input" type="search" placeholder="Search…" autofocus>
                                                </form>
                                             </div>
                                             <div class="uk-width-auto">
                                                <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li> -->
                                 <!-- full-width-dropdown -->
                                 <!-- <li >
                                    <a href="speciality.php" >Specialities</a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2"  style="width:100% !important;"   >
                                       <div class="uk-drop-grid uk-child-width-1-3" uk-grid >
                                          <div >
                                             <ul class="uk-nav uk-navbar-dropdown-nav" >
                                                <li ><a href="inner-specilities.php" ><span uk-icon="arrow-right"></span>Gynae Pathology</a> </li>
                                                <li><a href="inner-specilities.php" ><span uk-icon="arrow-right"></span>Infectious Disease</a> </li>
                                                <li><a href="inner-specilities.php" ><span uk-icon="arrow-right"></span>Biochemistry</a></li>
                                             </ul>
                                          </div>
                                          <div>
                                             <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li ><a href="inner-specilities.php" ><span uk-icon="arrow-right"></span>Immunological Tests (Clia-Based Tests)</a></li>
                                                <li><a href="inner-specilities.php"  ><span uk-icon="arrow-right"></span>Histology and Cytopathology</a></li>
                                                <li ><a href="inner-specilities.php" ><span uk-icon="arrow-right"></span>Microbiology</a></li>
                                             </ul>
                                          </div>
                                          <div>
                                             <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li ><a href="inner-specilities.php" ><span uk-icon="arrow-right"></span>Immuno Histochemistry</a></li>
                                                <li ><a href="inner-specilities.php" ><span uk-icon="arrow-right"></span>Flow Cytometry</a></li>
                                                <li><a href="inner-specilities.php"  class="drop-down-font"><span uk-icon="arrow-right"></span>Recently added tests</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </li> -->
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </header>