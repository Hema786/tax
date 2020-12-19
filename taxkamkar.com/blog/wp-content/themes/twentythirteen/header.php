<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	<!-- Favicons -->
   <link href="https://taxkamkar.com/taxkamkar/assets/img/favicon.png" rel="icon">
   <link href="https://taxkamkar.com/taxkamkar/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Scripts -->
    <!--<script src="http://taxkamkar.com/js/app.js" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="http://taxkamkar.com/css/app.css" rel="stylesheet">
	
	
	<!-- Vendor CSS Files -->
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/venobox/venobox.css" rel="stylesheet">
	  <link href="https://taxkamkar.com/taxkamkar/assets/vendor/aos/aos.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	  <!-- Template Main CSS File -->
	  <link href="https://taxkamkar.com/taxkamkar/assets/css/style.css" rel="stylesheet">
      <link href="https://taxkamkar.com/taxkamkar/assets/css/simple-slider.css" rel="stylesheet" type="text/css">
      <link href="https://taxkamkar.com/taxkamkar/assets/css/receipt_rent.css" rel="stylesheet" type="text/css">
	
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="hfeed site">
		
		
		
		<div id="app">
        <!-- ======= Header ======= -->
  <header id="header" class="fixed-topp d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!---<h1 class="text-light"><a href="index.html"><span>Taxkamkar</span></a></h1>--->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="https://taxkamkar.com"><img src="https://taxkamkar.com/public/taxkamkar/assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <style>
          .nav-menu .drop-down > a:after
          {
              display:none;
          }
      </style>
      <nav class="nav-menu d-none d-lg-block">
        <ul> 
          <!--<li><a href="">About</a></li>-->
          <li class="drop-down"><a href="">Service Tools &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul>
              <li><a href="#">CA Assisted Filing</a></li>
              <li><a href="https://taxkamkar.com/taxplanner">Tax planner</a></li>
              <li><a href="https://taxkamkar.com/hra">HRA Calculator</a></li>
              <li><a href="https://taxkamkar.com/emi">EMI Calculator</a></li>
                <li><a href="https://taxkamkar.com/rent">Rent Reciept</a></li>
                <li><a href="#">Income Tax (Old vs New) Calculator</a></li>
            </ul>
          </li>
          <!--<li><a href="">Products</a></li>--->
          <li><a href="https://taxkamkar.com/blog/">Blog</a></li>
          <li><a href="https://taxkamkar.com/contact">Contact Us</a></li>
			
		  <li class="get-started">
	                </li><li class="nav-item">
                <a class="nav-link" href="https://taxkamkar.com/login">Login/</a>
            </li>
                        <li class="nav-item new-li" style="padding:0px">
                <a class="nav-link" href="https://taxkamkar.com/register" style="padding:0px;padding-top: 8px;">Register</a>
            </li>
                    		  	
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
 </div>
		<style>
		    .nav-menu li:hover > a, .nav-menu li a:hover, .nav-menu li:focus > a, .nav-menu li a:focus {
    background-color: transparent !important;
    color: #000;
}
.nav-menu .drop-down ul {
    display: inline-grid;
}
		</style>

		<div id="main" class="site-main">
