<?php
/**
 * The template for displaying all single works posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>



		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'work' );
			// End of the loop.
		endwhile;
		?>




<?php get_footer(); ?>
