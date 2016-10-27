<?php
/**
* The template part for displaying single posts
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
?>

<?php  if( have_rows('work_layout') ): ?>
<?php   while ( have_rows('work_layout') ) : the_row();?>


<?php if( get_row_layout() == 'full' ):?>
<div class="row ">
	<div class="large-12 medium-12 small-12 columns text-center margine-basso">
		<div class="content-portfolio" style="background-image: url('<?php the_sub_field('full_image'); ?>');">
		</div>
	</div>
	</div>
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



<?php if( get_row_layout() == 'info_and_credits' ):?>

<div class="row">
<div class="small-10 large-10 medium-10 small-centered large-centered medium-centered columns" style="font-family: <?php the_field('font');?>">
<div class="large-12 medium-12 small-12 columns  text-center margine-basso margine-alto">
	<h1 style="font-family: <?php the_field('font');?>"><?php the_title(); ?></h1>
	</div>
  <div class="large-6 medium-6 small-12 columns  text-justify">
		<p><?php the_sub_field('intro_text');?></p>
	</div>
	<div class="large-6 medium-6 small-12 columns text-justify" >
		<?php if( have_rows('right') ):?>
				<ul id="credits">

			<?php while ( have_rows('right') ) : the_row();?>
				<li class="text-right hide-for-small-only"><?php   the_sub_field('list');?></li>
				<li class="text-left show-for-small-only"><?php   the_sub_field('list');?></li>
							<?php  endwhile;?>
					<?php  endif;?>
			 </ul>
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


<?php if( get_row_layout() == 'credits' ):?>
<div class="row  ">
<div class="small-10 large-10 medium-10 small-centered large-centered medium-centered columns" style="font-family: <?php the_field('font');?>">
	<div class="large-6 medium-6 small-12 columns">
	<?php if( have_rows('left') ):?>
      <ul id="credits">

    <?php while ( have_rows('left') ) : the_row();?>
      <li class="text-right hide-for-small-only"><?php   the_sub_field('list');?></li>
      <li class="text-center show-for-small-only"><?php   the_sub_field('list');?></li>
     	      <?php  endwhile;?>
        <?php  endif;?>
     </ul>
</div>

	<div class="large-6 medium-6 small-12 columns">
	<?php if( have_rows('right') ):?>
      <ul id="credits">

    <?php while ( have_rows('right') ) : the_row();?>
      <li class="text-left hide-for-small-only"><?php   the_sub_field('list');?></li>
      <li class="text-center show-for-small-only"><?php   the_sub_field('list');?></li>
     	      <?php  endwhile;?>
        <?php  endif;?>
     </ul>
</div>

	</div>
</div>
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
