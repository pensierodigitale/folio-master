<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<header class="title-bar">
			<div class="portfolio-menu">
				<a class="float-left menu-trigger-folio " id="left-menu" href="#left-menu">
					<span><span class="ion-android-menu icon-menu"></span> works </span>
				</a>
				</div>
				<div class="logo-wrapper hide-for-small-only">
					<div class="logo">
						<img src="http://res.cloudinary.com/thinkdigital/image/upload/v1476613538/logo-folio_iywawc.png">
					</div>
				</div>
				<div class="main-menu">
					<a class="float-right menu-trigger-folio" id="right-menu" href="#right-menu">
						<span> menu <span class="ion-android-menu icon-menu"></span></span>
					</a>
				</div>
			</header>
			<div id="sidr-left">
		<?php
wp_nav_menu(array(
    'container' => false,
    'menu' => __( 'Drill Menu', 'textdomain' ),
    'menu_class' => 'vertical menu',
    'theme_location' => 'drill-menu',
    'items_wrap'      => '<ul id="%1$s" class="%2$s" data-drilldown="">%3$s</ul>',
    //Recommend setting this to false, but if you need a fallback...
    'fallback_cb' => 'f6_drill_menu_fallback',
    'walker' => new F6_DRILL_MENU_WALKER(),
));
?>
			</div>
			<div id="sidr-right">
				<ul>
					<li><a  href="http://foundation.zurb.com/sites/docs/off-canvas.html">List 1</a></li>
					<li class="active"><a href="#">List 2</a></li>
					<li><a href="#">List 3</a></li>
				</ul>
			</div>

            <div id="loader" class="pageload-overlay" data-opening="M -18 -26.90625 L -18 86.90625 L 98 86.90625 L 98 -26.90625 L -18 -26.90625 Z M 40 29.96875 C 40.01804 29.96875 40.03125 29.98196 40.03125 30 C 40.03125 30.01804 40.01804 30.03125 40 30.03125 C 39.98196 30.03125 39.96875 30.01804 39.96875 30 C 39.96875 29.98196 39.98196 29.96875 40 29.96875 Z">
                     <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="xMidYMid slice">
                         <path d="M -18 -26.90625 L -18 86.90625 L 98 86.90625 L 98 -26.90625 L -18 -26.90625 Z M 40 -25.6875 C 70.750092 -25.6875 95.6875 -0.7500919 95.6875 30 C 95.6875 60.750092 70.750092 85.6875 40 85.6875 C 9.2499078 85.6875 -15.6875 60.750092 -15.6875 30 C -15.6875 -0.7500919 9.2499078 -25.6875 40 -25.6875 Z"/>
                     </svg>
             <script type="text/javascript">
                     var  ricaLoader = new SVGLoader( document.getElementById( 'loader' ), {speedIn: 500, easingIn : mina.easeinout , speedOut: 500 } );
                     var f_d = Barba.Utils.deferred();

                     ricaLoader.show(f_d.resolve, 0);
                     console.log("init loader");
             </script>
             </div><!-- /pageload-overlay -->
             <div id="barba-wrapper">
                        <div class="barba-container" data-namespace="page">