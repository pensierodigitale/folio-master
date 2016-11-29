<?php
/**
 * Template Name: Full page home
 */

get_header();
?>
<?php //var_dump(apache_request_headers());?>


	   <main id="container"  role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'fullhome' );


			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->



<?php get_footer(); ?>