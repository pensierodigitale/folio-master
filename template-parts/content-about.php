<?php /** * The template used for displaying page content * * @package WordPress * @subpackage Twenty_Sixteen * @since Twenty Sixteen 1.0 */ ?>

<?php  if( have_rows('about_layout') ): ?>
<?php   while ( have_rows('about_layout') ) : the_row();?>
<?php if( get_row_layout() == 'full' ):?>
<div class="row ">
  <div class="large-12 medium-12 small-12 columns text-center margine-basso">
    <div class="content-portfolio" style="background-image: url('<?php the_sub_field('full_image'); ?>');">
    </div>
  </div>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'intro_about' ):?>
<article class="cf ph3 ph5-ns pv5">
  <header class="fn fl-ns w-50-ns pr4-ns">
    <h1 class="f2 lh-title fw9 mb3 mt0 pt3 bt bw2">
    <?php the_title(); ?>
    </h1>
    <h2 class="f3 mid-gray lh-title">
    <?php the_sub_field('claim');?>
    </h2>
  </header>
</article>
<?php endif; ?>

<?php if( get_row_layout() == 'intro_about_right' ):?>
<article class="cf ph3 ph5-ns pv5">
  <header class="fn float-right w-50-ns pr4-ns">
    <h1 class="f2 lh-title fw9 mb3 mt0 pt3 bt bw2">
   <?php the_sub_field('title');?>  </h1>
    <h2 class="f3 mid-gray lh-title">
     <?php the_sub_field('claim');?></h2>
  </header>
</article>
<?php endif; ?>



<?php if( get_row_layout() == 'text' ):?>
<article class="cf ph3 ph5-ns pv5">
  <header class="fn fl-ns w-100-ns pr4-ns text-justify">
    <h1 class="f2 lh-title fw9 mb3 mt0 pt3 ">
    <?php the_sub_field('title');?> </h1>
    <h2 class="f3 mid-gray lh-title">
     <?php the_sub_field('claim');?></h2>
  </header>
</article>
<?php endif; ?>




<?php if( get_row_layout() == 'half' ):?>
<div class="row">
  <div class="large-6 medium-6 small-12 columns  text-center margine-basso">
    <div class="content-portfolio" style="background-image: url('<?php the_sub_field('first_image'); ?>');">
    </div>
  </div>
  <div class="large-6 medium-6 small-12 columns text-center margine-basso">
    <div class="content-portfolio" style="background-image: url('<?php the_sub_field('second_image'); ?>');">
    </div>
  </div>
</div>
<?php endif; ?>
<?php if( get_row_layout() == 'intro_text' ):?>
<div class="row">
  <div class="small-10 large-10 medium-10 small-centered large-centered medium-centered columns" style="font-family: <?php the_field('font');?>">
    <div class="large-12 medium-12 small-12 columns  text-center margine-basso margine-alto">
      <h1 style="font-family: <?php the_field('font');?>"><?php the_title(); ?></h1>
    </div>
    <div class="large-12 medium-12 small-12 columns  text-left">
      <h5 style="font-family: <?php the_field('font');?>"><?php the_sub_field('claim');?></h5>
    </div>
    <div class="large-6 medium-6 small-12 columns  text-justify">
      <p><?php the_sub_field('intro_text_sinistra');?></p>
    </div>
    <div class="large-6 medium-6 small-12 columns text-justify" >
      <p><?php the_sub_field('intro_text_destra');?></p>
    </div>
    <hr>
  </div>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'intro_full' ):?>
<div class="row">
  <div class="small-10 large-10 medium-10 small-centered large-centered medium-centered columns" style="font-family: <?php the_field('font');?>">
    <div class="large-12 medium-12 small-12 columns  text-center margine-basso margine-alto">
      <h1 style="font-family: <?php the_field('font');?>"><?php the_title(); ?></h1>
    </div>
    <div class="large-12 medium-12 small-12 columns  text-center margine-basso ">
      <p><?php the_sub_field('intro_text');?></p>
    </div>
    <hr>
  </div>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'big_intro' ):?>
<article class="pa3 pa5-ns">
  <h1 class="f2 f-subheadline-ns mb4">
  <?php the_sub_field('intro_text');?>
  </h1>
  <p class="f4 f3-ns measure lh-copy">
    <?php the_sub_field('claim');?>
  </p>
</article>
<?php endif; ?>

<?php if( get_row_layout() == 'big_intro_image' ):?>
<article class="vh-100 dt w-100 white cover" style="background-image: url('<?php the_sub_field('full_image'); ?>' );">
  <div class="dtc v-mid tc white ph3 ph4-l">
    <h1 class="f6 f2-m f-subheadline-l fw6 tc"><?php the_title(); ?></h1>
  </div>
</article>
<?php endif; ?>



<?php endwhile; // IMPORTANT - end while ?>
<?php else: // field_name returned false ?>
<div class="row ">
  <div class="large-12 medium-12 small-12 columns text-center margine-basso">
    <div class="content-portfolio" style="background-image: url('http://placehold.it/1600x1600');">
    </div>
  </div>
  <h1 class="text-center"><?php the_title(); ?></h1>
  <br>
  <hr>
  <div class="large-6 medium-6 small-12 columns  text-justify">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur.</p>
  </div>
  <div class="large-6 medium-6 small-12 columns text-justify" >
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur.</p>
  </div>
  <br>
  <hr>
  <div class="large-6 medium-6 small-12 columns  text-center margine-basso">
    <div class="content-portfolio" style="background-image: url('http://placehold.it/1600x1600'); ?>');">
    </div>
  </div>
  <div class="large-6 medium-6 small-12 columns text-center margine-basso">
    <div class="content-portfolio" style="background-image: url('http://placehold.it/1600x1600'); ?>');">
    </div>
  </div>
  <div class="large-12 medium-12 small-12 columns text-center margine-basso">
    <div class="content-portfolio" style="background-image: url('http://placehold.it/1600x1600');">
    </div>
  </div>
</div>
<?php endif; // IMPORTANT - end if ?>
