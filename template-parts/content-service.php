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
  <div class="small-12 small-centered columns margine-alto ">
    <article class="margine-alto">
      <ul class="list pl0">
        <?php
        // check if the repeater field has rows of data
        if( have_rows('list') ):
        // loop through the rows of data
        while ( have_rows('list') ) : the_row();?>
        <li class="pa3 pa4-ns bb b--black-10 lista-service">
          <b class="db f3 mb1"><?php the_sub_field('title');?></b>
          <span class="f5 db lh-copy measure">
          <?php the_sub_field('description');?></span>
        </li>
          <?php endwhile;?>
      <?php endif;?>
      </ul>
      </article><!-- #post-## -->
    </div>
  </div>