<?php
/**
 * Template Name: Home
 */

get_header();
?>
<?php //var_dump(apache_request_headers());?>
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
	   <main id="container"  role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'home' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->
 </div>
</div>


<?php get_footer(); ?>
