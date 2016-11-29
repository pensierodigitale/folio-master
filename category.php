<?php
/**
* A Simple Category Template
*/

get_header(); ?>

<section id="primary" class="site-content">
<div id="content" role="main">
<?php
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="archive-header">
<?php
// Since this template will only be used for Design category
// we can add category title and description manually.
// or even add images or change the layout
?>


</header>

<?php

// The Loop
while ( have_posts() ) : the_post();


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


<?php endwhile; // End Loop

else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
</section>


<?php get_footer(); ?>
