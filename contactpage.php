<?php
/**
 * Template Name: Contact page with color background
 */

get_header();
?>
<?php //var_dump(apache_request_headers());?>


	   <main id="container"  role="main"  class="cover" style="background-color: <?php the_field('background_color'); ?>">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'contact' );


			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->



<?php get_footer(); ?>