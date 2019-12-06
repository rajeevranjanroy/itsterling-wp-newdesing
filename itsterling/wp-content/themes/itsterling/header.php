<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

		<!-- Fav Icons   -->
		<link rel="icon" href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/images/fav-icon-32x32.png">
		<link rel="apple-touch-icon" href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/images/fav-icon-32x32.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/images/fav-icon-180x180.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/images/fav-icon-270x270.png">

		<!-- Bootstrap -->
		<link href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Animate -->
		<link href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/css/animate.min.css" rel="stylesheet">

		<!-- Main CSS -->
		<link href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/css/style.css" rel="stylesheet">

		<!-- responsive stylesheet -->
		<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/css/responsive.css">

		<!-- Custom CSS -->
		<link href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/css/custom.css" rel="stylesheet">
		<link href="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/css/animate-header.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

  <!--<div class="sideslider" id="sideslider" style="margin-left: -265px;">
		<div class="sideslider-tab"><a class="link" href="blog/request_free_quote"> Request A Quote </a> </div>
		 <div id="side-panel-trigger" class="side-panel-trigger sideslider-tab "><a class="link" href="#"> SEND COURSE ENQUIRY!</div>
	</div> -->
  <div class="web-sidebar-menu-container" id="web-sidebar-menu-container">
    <div class="web-sidebar-menu-push">
      <div class="web-sidebar-menu-overlay"></div>
      <div class="web-sidebar-menu-inner">
        <!--Header Section Start Here -->
		
        <header class="header-section" id="home" >
          <div class="top-header">
            <div class="container">
              <div class="row ">
               <ul class="contact-detail2 col-md-6 pull-left mobile_only_text_center top_contact_details_font_style">
					<li> <a href="mailto:info@itsterling.com"><i class="fa fa-envelope-o"></i><span class="bold"> info@itsterling.com</span></a></li>
					<li> <a href="tel:+919999768659"><i class="fa fa-phone"></i><span itemprop="telephone" class="bold"> +91 99997 68659 , +91 120 4132554  </span></a> </li>
				</ul>
               <div class="social-links col-md-6 pull-right">
                 <ul class="social-icons hidden-xs pull-right">
                   <li> <a href="https://www.facebook.com/itsterling.India" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                   <li> <a href="https://twitter.com/Techmo_Web" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                   <li> <a href="https://www.linkedin.com/company/techmo-web" target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                   <!-- <li> <a href="#" target="_blank"><i class="fa fa-youtube"></i></a> </li>
                   <li> <a href="#" target="_blank"><i class="fa fa-rss"></i></a> </li> -->
                 </ul>
               </div>
              </div>
            </div>
          </div>
          
          <div class="navbar navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <a class="navbar-brand col-md-12" href="index.html">
                  <img itemprop="image" src="<?php echo get_site_url(); ?>/wp-content/themes/itsterling/images/Web-Logo1.png" alt="itsterling Logo" class="img-responsive">
                </a> 
                <div class="header-right-toggle pull-right hidden-md hidden-lg">
                  <a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
                </div>
              </div>
              <nav class="main-navigation text-left pull-right hidden-xs hidden-sm">
                <ul class="nav navbar-nav">
                  <li class="active"> <a href="index.html" class="btn-theme btn spark-1 spark-4 has-submenu"><b>Company</b></a>
				  <ul class="sub-menu">
                      <li><a href="about-us.html"><b>About</b></a></li>
                      <li><a href="#"><b>Meet the team</b></a></li>
                      
                    </ul>
				  </li>
				  
                  <li><a href="services.html" class="has-submenu"><b>What we do</b></a>
                    <ul class="sub-menu">
					<li><a href="best-web-designing-company.html"><b>UI/UX Design</b></a></li>
					<li><a href="mobile-application-development-company.html"><b>Mobile App Development</b></a></li>
					<li><a href="best-web-development-company.html"><b>Web Application Development</b></a></li>
					<li><a href="software-development-services.html"><b>Software Development</b></a></li>
					<li><a href="best-game-development-company.html"><b>Game Development</b></a></li>
					<li><a href="ecommerce-development-services.html"><b>E-commerce Development</b></a></li>
					<li><a href="best-cms-development-company.html"><b>CMS Development</b></a></li>
                    <li><a href="#"><b>Support &amp; Maintenance</b></a></li>  
                    <li><a href="best-digital-marketing-company.html"><b>Digital Marketing</b></a></li>
                    </ul>
                  </li>
				  <li> <a href="website-design-development-products.html"><b>Our Work</b></a></li>
				  <li><a href="portfolio.html" class="has-submenu"><b>Portfolio</b></a>
                    <ul class="sub-menu">
                      <li><a href="web-design-and-development-portfolio-e-commerce-websites.html"><b>Web Development</b></a></li>
                      <!-- <li><a href="seo-digital-marketing-portfolio.html"><b>SEO / Digital Marketing</b></a></li> -->
                      <li><a href="mobile-application-development-portfolio.html"><b>Mobile App Development</b></a></li>
                     <!--  <li><a href="logo-design-portfolio.html"><b>Logo Designing</b></a></li> -->
                     <!--  <li><a href="movie-branding-portfolio.html"><b>Movie Branding</b></a></li>  -->
                    </ul>
                  </li>
                  <!-- <li><a href="web-trainings.html" class="has-submenu"><b>Trainings</b></a>
                    <ul class="sub-menu">
                      <li><a href="digital-marketing-training.html"><b>Digital Marketing Training</b></a></li>
                      <li><a href="realtime-php-training.html"><b>Realtime PHP Training</b></a></li>
                      <li><a href="realtime-web-designing-training.html"><b>Web Designing Training</b></a></li>
                      <li><a href="corporate-training.html"><b>Corporate Training</b></a></li>
					  <li><a href="blog/course_enquiry"><b>Send Course Enquiry</b></a></li>
                    </ul>
                  </li> -->
                  <li> <a href="#"><b>Hire Developer</b></a></li>
                  <li> <a href="blog.html"><b>News/Updates</b></a></li>
                  <li> <a href="contact_us.html"><b>Contact us</b></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </header>
        <!-- Header Section End Here -->  
		<!-- <div class="jsn-air-balloon request_quote"> <a href="blog/request_free_quote"><img src="images/request-a-quote.png" alt="request a quote" > </a> </div> -->

