<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FolioTheme
 */

?>

<article id="post-<?php the_ID(); ?>" class="fl w-100 w-50-m  w-25-ns pa2-ns">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a class="link dim black-80 b" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="thumbnail aspect-ratio aspect-ratio--1x1">
		    <?php the_post_thumbnail()?>
		</div>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php folio_simple_portoflio_wordpress_theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php folio_simple_portoflio_wordpress_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
