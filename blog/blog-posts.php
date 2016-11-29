

<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

<div class="row">


  <!-- the loop -->
  <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    <?php
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>
    <div class="small-12 medium-4 large-4 columns">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <a  href="<?php the_permalink(); ?>">
    <div class="aspect-ratio aspect-ratio--1x1 ">
      <img style="background-image:url(<?php echo $thumbnail[0]; ?>);"
      class="db bg-center cover aspect-ratio--object" />
    </div>
  </a>
  <br>
    <header class="entry-header">
  <a  href="<?php the_permalink(); ?>"> 
    <h1 class="entry-title text-center dark-gray f4 lh-title fw9 mb3 mt0 pt3 bt bw2">
       <?php the_title(); ?>
    </h1>
  </a>
  </header><!-- .entry-header -->
  <div class="entry-content">

<?php the_excerpt();?>
    <?php wp_pagenavi(); ?>
  </div><!-- .entry-content -->
<br>
  <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer color-grey">
      <?php
        edit_post_link(
          sprintf(
            /* translators: %s: Name of current post */
            esc_html__( 'Edit %s', 'folio-simple-portoflio-wordpress-theme' ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
          ),
          '<span class="edit-link dark-gray">',
          '</span>'
        );
      ?>
      <br>
      <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?> <?php edit_post_link(__('{Edit}'), ''); ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>
</article><!-- #post-## -->
 </div>
  <?php endwhile; ?>
  <!-- end of the loop -->
    <?php wp_reset_postdata(); ?>
</div>



<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
