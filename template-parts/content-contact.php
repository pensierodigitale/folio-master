<?php
/**
 * Template part for displaying page content in contact.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FolioTheme
 */

?>
<div class="row">
<div class="small-12  medium-6 large-6 columns cover full-height" style="background-image: url('<?php the_field('background_image'); ?>');">

</div>
<div class="small-12 medium-6 large-6  columns">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'folio-simple-portoflio-wordpress-theme' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
      <?php
        edit_post_link(
          sprintf(
            /* translators: %s: Name of current post */
            esc_html__( 'Edit %s', 'folio-simple-portoflio-wordpress-theme' ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
          ),
          '<span class="edit-link">',
          '</span>'
        );
      ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>
</article><!-- #post-## -->
</div>
</div>