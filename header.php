<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
				*
				* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
				*
				* @package FolioTheme
				*/
	?><!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<?php wp_head(); ?>
		</head>
		<body <?php body_class(); ?>>
			<div id="page" class="site">
<div class="left-drawer">

    <div class="left-drawer-content">

        <!-- Menu -->
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
								<!-- end menu -->
    </div>
</div>

<div class="right-drawer">

    <div class="right-drawer-content">
			<!-- Main Menu -->
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'primary-menu',
					) );
				?>
				</nav><!-- .main-navigation -->
				<?php endif; ?>

    </div>
</div>

							<header class="title-bar">
								<div class="row expanded">
									<div class="portfolio-menu small-4 columns">
									 <span class="ion-drag float-left hide-for-small-only menu-trigger-works"></span>
									 <span class="ion-arrow-left-c float-left hide-for-small-only hide close-left-drawer"></span>
										<a class="float-left menu-trigger-folio menu-trigger-works "> works</a>
										<a class="float-left menu-trigger-folio  hide close-left-drawer"> close</a>

									</div>
									<div class="logo-wrapper small-4 columns">
										<div class="logo">
											<?php $image = get_field('logo_upload', 'option');
											if( !empty($image) ): ?>
											<h1><a href="<?php echo site_url(); ?>"><img src="<?php echo $image; ?>"></a></h1>
											<?php endif; ?>
										</div>
									</div>
									<div class="main-menu small-4 columns">
									<span class="ion-drag float-right hide-for-small-only menu-trigger-folio menu-trigger"></span>
									<span class="ion-arrow-right-c float-right hide-for-small-only menu-trigger-folio hide close-right-drawer"></span>
										<a class="float-right menu-trigger-folio menu-trigger" > menu </a>
										<a class="float-right menu-trigger-folio hide close-right-drawer" > close </a>

									</div>
								</div>
							</header>

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
										<div id="content" class="site-content">
