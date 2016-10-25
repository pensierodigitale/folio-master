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
		<div class="off-canvas-wrapper">
				<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
						<div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>

								<!-- Close button -->
								<button class="close-button" aria-label="Close menu" type="button" data-close>
<span aria-hidden="true">&times;</span>
</button>

								<!-- Menu -->
								<ul class="vertical menu">
										<li><a href="./portfolio.html">Foundation</a></li>
										<li><a href="./product-page.html">Dot</a></li>

								</ul>

						</div>
						<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right"></div>
						  <div class="off-canvas-content" data-off-canvas-content>
		<div class="title-bar">
				<div class="title-bar-left portfolio-menu">
						<button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
						<span class="ion-android-menu icon-menu">works</span>
				</div>
				<div class="title-bar-right">
						<span class="title-bar-title">menu</span>
						<button class="menu-icon" type="button" data-open="offCanvasRight"></button>
				</div>
		</div>
			<div id="sidr-left">
				<ul>
					<ul class="vertical menu" data-drilldown>
  <li>
    <a href="#Item-1">Item 1</a>
    <ul class="vertical menu">
      <li><a href="#Item-1A">Item 1A</a></li>
      <!-- ... -->
    </ul>
  </li>
  <li><a href="#Item-2">Item 2</a></li>
</ul>
			</div>
			<div id="sidr-right">
				<ul>
					<li><a href="#">List 1</a></li>
					<li class="active"><a href="#">List 2</a></li>
					<li><a href="#">List 3</a></li>
				</ul>
			</div>
