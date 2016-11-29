<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FolioTheme
 */

?>

<?php
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<div class="small-12 medium-3 large-3 columns">
    <div class="aspect-ratio aspect-ratio--1x1 ">
      <a href="<?php the_permalink(); ?>">
      <img style="background-image:url(<?php echo $thumbnail[0]; ?>);"
      class="db bg-center cover aspect-ratio--object" /></a>
    </div>
      <header class="entry-header">
  <a  href="<?php the_permalink(); ?>">
    <h1 class="entry-title  dark-gray f4 lh-title fw9 mb3 mt0 pt3 bt bw2 mt3">
       <?php the_title(); ?>
    </h1>
    <h3 class="f6 f5 fw4 mt2 black-60"> <?php
               $category = get_the_category( $post->ID );
               echo $category[0]->cat_name;?></h3>
  </a>
  </header><!-- .entry-header -->
 </div>
