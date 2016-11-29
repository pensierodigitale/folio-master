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


<?php if( is_singular('work') ) { ?>
<hr>
<div id="single-navigation-portfolio">
<div class="row">
<div id="previous" class="large-4 medium-4 small-4 columns  text-left">
<div class="post_nav_link">
<?php previous_post_link('%link','<strong>Prev Work </strong> <br><span class="ion-ios-arrow-thin-left"></span>  <span>%title</span>', TRUE); ?>
</div>
</div>
<div id="share" class="large-4 medium-4 small-4 columns">
<div class="share text-center">
	<div class="share_link">
<a class="open-share"><strong>Share </strong> <br>  <span class="ion-share"></span></a>
<a id="close-share" class="hide "><strong>close</strong><br>  <span class="ion-close"></span> </a>
</div>
</div>
</div>
<div id="next" class="large-4 medium-4 small-4 columns  text-right">
<div class="post_nav_link">
<?php next_post_link('%link','<strong>Next Work </strong> <br> <span>%title</span> <span class="ion-ios-arrow-thin-right"></span>', TRUE); ?>
</div>
</div>
</div>
</div>
<hr>

<?php } ?>
<div id="share-panel" class="z-depth-3 ">
	  <div class="button-social expanded button-group">
<?php if( have_rows('share_settings', 'option') ): ?>
    <?php while( have_rows('share_settings', 'option') ): the_row(); ?>
			<a href="<?php the_sub_field('url'); ?>" class="button expanded"><?php the_sub_field('social_network'); ?></a>
    <?php endwhile; ?>
<?php endif; ?>
   </div>
</div>



<?php get_footer(); ?>
