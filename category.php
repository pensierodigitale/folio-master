<?php
/**
 * The template for displaying category works.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Folio_Theme
 */

get_header(); ?>

<main id="container"  role="main">

	<?php
	if ( have_posts() ) : ?>

		<header class="page-header text-center">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );

			?>
		</header><!-- .page-header -->
		<hr>
		<div class="row ">

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_format() );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>
</div>
<hR>
</main><!-- .site-main -->


<?php get_footer();
