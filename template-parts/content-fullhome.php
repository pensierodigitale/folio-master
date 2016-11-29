<?php /** * The template used for displaying page content * * @package WordPress * @subpackage Twenty_Sixteen * @since Twenty Sixteen 1.0 */ ?>

<div class="example-classname">
<article class="vh-100 dt w-100 cover" style="background-image: url('http://mrf0q11hs9f5smjcwivxd3qm.wpengine.netdna-cdn.com/werkstatt-agency/wp-content/uploads/sites/2/2016/09/m-05-53.jpg');">
  <div class="dtc v-mid tc white ph3 ph4-l">
    <h1 class="f6 f2-m f-subheadline-l fw6 tc">Vertically centering things in css is easy!</h1>
  </div>
</article>
</div>
<div class="example-classname">
<article class="vh-100 dt w-100 cover" style="background-image: url('http://mrf0q11hs9f5smjcwivxd3qm.wpengine.netdna-cdn.com/werkstatt-agency/wp-content/uploads/sites/2/2016/09/m-0554.jpg');">
  <div class="dtc v-mid tc white ph3 ph4-l">
    <h1 class="f6 f2-m f-subheadline-l fw6 tc">Vertically centering things in css is easy!</h1>
  </div>
</article>
</div>



  <?php  if( have_rows('layout') ): ?>
  <?php   while ( have_rows('layout') ) : the_row();?>
    <div class="row  expanded row-no-margin">




<?php if( get_row_layout() == 'full_column' ):?>
  <div class="large-12 medium-12 small-12 columns columns-no-margin text-center">
      <div class="content-portfolio overlay" style="background-image: url('<?php the_sub_field('full_image'); ?>');">
            <div class="image-overlay-effect effect-oscar " >
              <?php $post_object = get_sub_field('link');
               if( $post_object ):
                  // override $post
                 $post = $post_object;
                 setup_postdata( $post ); ?>
               <div class="start-caption" >
                   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                   <p><?php the_sub_field('intro_text');?></p>
               </div>
               <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
              <?php endif; ?>
           </div>
       </div>
   </div>
<?php endif; ?>





<?php if( get_row_layout() == 'half_columns' ):?>
       <div class="large-6 medium-6 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio overlay" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar " >
                   <?php $post_object = get_sub_field('first_link');
                    if( $post_object ):
                       // override $post
                      $post = $post_object;
                      setup_postdata( $post ); ?>
                    <div class="start-caption" >
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                </div>
            </div>
        </div>

         <div class="large-6 medium-6 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                   <?php $post_object = get_sub_field('second_link');
                    if( $post_object ):
                       // override $post
                      $post = $post_object;
                      setup_postdata( $post ); ?>
                    <div class="start-caption" >
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('second_text');?></p>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                </div>
            </div>
        </div>
  <?php endif; ?>






<?php if( get_row_layout() == 'third_columns' ):?>
       <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                   <?php $post_object = get_sub_field('first_link');
                    if( $post_object ):
                       // override $post
                      $post = $post_object;
                      setup_postdata( $post ); ?>
                    <div class="start-caption" >
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                </div>
             </div>
        </div>

         <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                   <?php $post_object = get_sub_field('second_link');
                    if( $post_object ):
                       // override $post
                      $post = $post_object;
                      setup_postdata( $post ); ?>
                    <div class="start-caption" >
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('second_text');?></p>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
          <div class="content-portfolio" style="background-image: url('<?php the_sub_field('third_image'); ?>');">
                <div class="image-overlay-effect effect-oscar" >
                  <?php $post_object = get_sub_field('third_link');
                   if( $post_object ):
                      // override $post
                     $post = $post_object;
                     setup_postdata( $post ); ?>
                   <div class="start-caption" >
                       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                       <p><?php the_sub_field('third_text');?></p>
                   </div>
                   <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php endif; ?>
               </div>
           </div>
       </div>
<?php endif; ?>


<?php if( get_row_layout() == 'fourth_columns' ):?>
       <div class="large-3 medium-3 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                   <?php $post_object = get_sub_field('first_link');
                    if( $post_object ):
                       // override $post
                      $post = $post_object;
                      setup_postdata( $post ); ?>
                    <div class="start-caption" >
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                </div>
           </div>
        </div>
         <div class="large-3 medium-3 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                   <?php $post_object = get_sub_field('second_link');
                    if( $post_object ):
                       // override $post
                      $post = $post_object;
                      setup_postdata( $post ); ?>
                    <div class="start-caption" >
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('second_text');?></p>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="large-3 medium-3 small-12 columns columns-no-margin text-center">
          <div class="content-portfolio" style="background-image: url('<?php the_sub_field('third_image'); ?>');">
                <div class="image-overlay-effect effect-oscar" >
                  <?php $post_object = get_sub_field('third_link');
                   if( $post_object ):
                      // override $post
                     $post = $post_object;
                     setup_postdata( $post ); ?>
                   <div class="start-caption" >
                       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                       <p><?php the_sub_field('third_text');?></p>
                   </div>
                   <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php endif; ?>
               </div>
           </div>
       </div>
       <div class="large-3 medium-3 small-12 columns columns-no-margin text-center">
         <div class="content-portfolio" style="background-image: url('<?php the_sub_field('fourth_image'); ?>');">
               <div class="image-overlay-effect effect-oscar" >
                 <?php $post_object = get_sub_field('fourth_link');
                  if( $post_object ):
                     // override $post
                    $post = $post_object;
                    setup_postdata( $post ); ?>
                  <div class="start-caption" >
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php the_sub_field('fourth_text');?></p>
                  </div>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                 <?php endif; ?>
              </div>
          </div>
      </div>
<?php endif; ?>


<?php if( get_row_layout() == 'three-quarters_to_the_right' ):?>
       <div class="large-8 medium-8 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                   <?php $post_object = get_sub_field('first_link');
                    if( $post_object ):
                       // override $post
                      $post = $post_object;
                      setup_postdata( $post ); ?>
                    <div class="start-caption" >
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('intro_text');?></p>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                </div>
            </div>
        </div>

         <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
           <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                 <div class="image-overlay-effect effect-oscar" >
                   <?php $post_object = get_sub_field('second_link');
                    if( $post_object ):
                       // override $post
                      $post = $post_object;
                      setup_postdata( $post ); ?>
                    <div class="start-caption" >
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_sub_field('second_text');?></p>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                   <?php endif; ?>
                </div>
            </div>
        </div>
  <?php endif; ?>



  <?php if( get_row_layout() == 'three-quarters_to_the_left' ):?>
         <div class="large-4 medium-4 small-12 columns columns-no-margin text-center">
             <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
                   <div class="image-overlay-effect effect-oscar" >
                     <?php $post_object = get_sub_field('first_link');
                      if( $post_object ):
                         // override $post
                        $post = $post_object;
                        setup_postdata( $post ); ?>
                      <div class="start-caption" >
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          <p><?php the_sub_field('intro_text');?></p>
                      </div>
                      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                     <?php endif; ?>
                  </div>
              </div>
          </div>

           <div class="large-8 medium-8 small-12 columns columns-no-margin text-center">
             <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
                   <div class="image-overlay-effect effect-oscar" >
                     <?php $post_object = get_sub_field('second_link');
                      if( $post_object ):
                         // override $post
                        $post = $post_object;
                        setup_postdata( $post ); ?>
                      <div class="start-caption" >
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          <p><?php the_sub_field('second_text');?></p>
                      </div>
                      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                     <?php endif; ?>
                  </div>
              </div>
          </div>
    <?php endif; ?>




<?php endwhile; // IMPORTANT - end while ?>
<?php endif; // IMPORTANT - end if ?>


</div>
