<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FolioTheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>
		   <?php
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>
		<div class="row ">
	<div class="large-12 medium-12 small-12 columns text-center margine-basso">
		<div class="content-portfolio-blog-single" style="background-image:url(<?php echo $thumbnail[0]; ?>);">
		</div>

	</div>
      </div>

      <div class="mw5 mw7-ns center text-center pa3 ph5-ns">
  <h1 class="f2 lh-title fw9 mb3 mt0 pt3 "><?php the_title(); ?></h1>

  <div  class="text-justify">
     <?php
      the_content(); ?>   
 
</div>
</div>
	<div class="author tc pv4 pv5-ns">
	<?php $avatar_url = get_avatar_img_url();?>
	<?php echo '<img class="br-100 pa1 ba b--black-10 h3 w3" alt="avatar" src=" ' . $avatar_url . ' ">';?>
  <h1 class="f5 f4-ns fw6 mid-gray">Jasper Whitehouse</h1>
  <h2 class="f6 gray fw2 ttu tracked">Los Angeles</h2>
</div>
<?php if( is_singular() ) { ?>
<hr>
<div id="single-navigation-portfolio">
<div class="row">
<div id="previous" class="large-6 medium-6 small-6 columns  text-left float-left">
<div class="post_nav_link text-left">
<?php previous_post_link('%link','<strong>Prev Work </strong> <br><span class="ion-ios-arrow-thin-left"></span>  <span>%title</span>', FALSE); ?>
</div>
</div>

<div id="next" class="large-6 medium-6 small-6 columns text-right float-right">
<div class="post_nav_link text-right">
<?php next_post_link('%link','<strong>Next Work </strong> <br> <span>%title</span> <span class="ion-ios-arrow-thin-right"></span>', FALSE); ?>
</div>
</div>
</div>
</div>
<hr>

<?php } ?>
 <?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php

get_footer();
