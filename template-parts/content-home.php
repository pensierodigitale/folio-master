<?php /** * The template used for displaying page content * * @package WordPress * @subpackage Twenty_Sixteen * @since Twenty Sixteen 1.0 */ ?>




<section id="portfolio">
  <?php  if( have_rows('layout') ): ?>
  <?php   while ( have_rows('layout') ) : the_row();?>

<div class="row  expanded row-no-margin">
<?php if( get_row_layout() == 'full' ):?>
    <?php $posts = get_sub_field('link');?>
       <div class="large-12 medium-12 small-12 columns columns-no-margin text-center">
            <div class="content-portfolio" style="background-image: url('<?php the_sub_field('full_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                        <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>





<?php if( get_row_layout() == 'half' ):?>
   <?php $posts = get_sub_field('first_link');?>
       <div class="large-6 medium-6 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
         <div class="large-6 medium-6 small-12 columns columns-no-margin text-center">
         <?php $posts = get_sub_field('second_link');?>
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('second_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>


<?php if( get_row_layout() == '34_right_columns' ):?>
    <?php $posts = get_sub_field('first_link');?>
       <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
         <div class="large-8 medium-8 small-12 columns columns-no-margin text-center">
         <?php $posts = get_sub_field('second_link');?>
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('second_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>



<?php if( get_row_layout() == '34_left_columns' ):?>
    <?php $posts = get_sub_field('first_link');?>
       <div class="large-8 medium-8 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
         <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
         <?php $posts = get_sub_field('second_link');?>
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('second_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>



<?php if( get_row_layout() == 'third' ):?>
   <?php $posts = get_sub_field('first_link');?>
       <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
         <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
         <?php $posts = get_sub_field('second_link');?>
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('second_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
         <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
         <?php $posts = get_sub_field('third_link');?>
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('third_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('third_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>



<?php if( get_row_layout() == 'quartet' ):?>
   <?php $posts = get_sub_field('first_link');?>
       <div class="large-3 medium-3 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
         <div class="large-3 medium-3 small-12 columns columns-no-margin text-center">
         <?php $posts = get_sub_field('second_link');?>
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('second_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
         <div class="large-3 medium-3 small-12 columns columns-no-margin text-center">
         <?php $posts = get_sub_field('third_link');?>
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('third_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('third_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
          <div class="large-3 medium-3 small-12 columns columns-no-margin text-center">
         <?php $posts = get_sub_field('4_link');?>
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('4_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                    <div class="start-caption" >
                    <?php if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('4_text');?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>



<?php endwhile; // IMPORTANT - end while ?>
<?php endif; // IMPORTANT - end if ?>


</div>
</section>
