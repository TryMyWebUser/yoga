<?php include "libs/load.php"; ?>
<!DOCTYPE html>
<html lang="zxx">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="aonetheme">
    <meta name="robots" content="">    
    <meta name="description" content="">
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="assets/images/home1/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/home1/favicon.png">
    
    <!-- PAGE TITLE HERE -->
    <title>Vedavistara</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
    
	<!-- BOOTSTRAP STYLE SHEET -->
	<link  href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- FLATICON STYLE SHEET -->
	<link href="assets/css/bootstrap-icons.css" rel="stylesheet">
	<!-- FONTAWESOME STYLE SHEET -->
	<link  href="assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- Feather STYLE SHEET -->
	<link href="assets/css/feather.css" rel="stylesheet">
	<!-- WOW ANIMATE STYLE SHEET -->
	<link href="assets/css/animate.css" rel="stylesheet">
	<!-- FONTS CSS STYLE SHEET -->
	<link href="assets/css/font.css" rel="stylesheet">
	<!-- OWL CAROUSEL STYLE SHEET -->
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet">
	<!-- MAGNIFIC POPUP STYLE SHEET -->
	<link href="assets/css/magnific-popup.min.css" rel="stylesheet">     
	<!-- MAIN STYLE SHEET -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
/* for desktop */
.whatsapp_float {
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	left:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
        font-size:30px;
	box-shadow: 2px 2px 3px #999;
        z-index:100;
}

.whatsapp-icon {
	margin-top:16px;
}
/* for mobile */
@media screen and (max-width: 767px){
     .whatsapp-icon {
	 margin-top:10px;
     }
    .whatsapp_float {
        width: 40px;
        height: 40px;
        bottom: 20px;
        left: 10px;
        font-size: 22px;
    }
}

/* for desktop */
.whatsapp_float1 {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 30px;
    right: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
}

.whatsapp-icon1 {
    margin-top: 16px;
}

/* for mobile */
@media screen and (max-width: 767px) {
    .whatsapp-icon1 {
        margin-top: 10px;
    }

    .whatsapp_float1 {
        width: 40px;
        height: 40px;
        bottom: 20px;
        right: 10px;
        font-size: 22px;
    }
}
</style>

<body>
    
    <!-- LOADING AREA START ===== -->
    <!-- <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div> -->
    <!-- LOADING AREA  END ====== -->

<!-- Curser Pointer -->
<div class="cursor"></div>
<div class="cursor2"></div>
    
	<div class="page-wraper">
     
        
        <!-- HEADER START -->
        <header class="site-header header-style-2 mobile-sider-drawer-menu header-full-width">
			<!--Top Bar section -->
			<div class="ao-top-bar">
						
						<!--Top Bar Left-->
						<div class="top-bar-left"> 
							<div class="top-bar-address"><i class="bi bi-geo-alt-fill"></i> Ramanathapuram, Coimbatore, Tamil Nadu 641045.</div>
							<div class="top-bar-time"><i class="bi bi-clock-fill"></i> Mon - Sat: 06.00am - 8.00pm</div>
						</div>
						<!--Top Bar Left End-->
						
						<!--Top Bar Rght-->
						<div class="top-bar-right"> 
							<div class="top-bar-mail"><i class="bi bi-envelope-fill"></i> info@example.com</div>
							<ul class="top-bar-soical-icon">
								<li><a href="#"><i class="bi bi-facebook"></i></a></li>
								<li><a href="#"><i class="bi bi-instagram"></i></a></li>
								<li><a href="https://wa.me/917845192939"><i class="bi bi-whatsapp"></i></a></li>
								<li><a href="#"><i class="bi bi-youtube"></i></a></li>
							</ul>
						</div>
						<!--Top Bar Right End-->
					</div>
			<!--Main Bar section -->
            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">  
					<div class="container"> 
						
						<!-- Mobile Logo -->
						<div class="mobile-logo-left"> 
							<div class="logo-header">
								<div class="logo-header-inner logo-header-one">
									<a href="index.php">
									<img src="assets/images/home2/logo1.png" alt="">
									</a>
								</div>
							</div>  
						</div>
						
						<!-- NAV Toggle Button -->
						<button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar icon-bar-first"></span>
							<span class="icon-bar icon-bar-two"></span>
							<span class="icon-bar icon-bar-three"></span>
						</button> 

						<!-- MAIN Vav -->
						<div class="nav-animation header-nav header-nav navbar-collapse collapse d-flex">
							<ul class=" nav navbar-nav">
								<li><a href="index.php">Home</a></li> 
								<li><a href="about.php">About Us</a></li> 
								<li>
									<a href="javascript:;">Thirumandhiram Sigitchai</a>
									<ul class="sub-menu">
										<?php
											$data = Operations::getHeader();
											foreach ($data as $val) {
										?>
                                        <li><a href="sigitchai.php?data=<?= $val['title']; ?>"><?= $val['title']; ?></a></li>
										<?php } ?>
									</ul> 
								</li> 
								<li><a href="shimaya.php">Shimaya</a></li>
								<li><a href="video.php">Videos</a></li> 
								<li><a href="contact.php">Contact Us</a></li> 
							</ul>
						</div>

						<!-- Header Right Section-->
						<div class="extra-nav header-2-nav">
							<div class="extra-cell">
								<a href="tel:+917845192939" class="site-button cursor-scale small">Book Class <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>                            

					</div>    
				</div>
            </div>
        </header>
        <!-- HEADER END -->