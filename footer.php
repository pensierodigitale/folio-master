<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package FolioTheme
*/
?>
</div>
</div>
</div><!-- #content -->
<footer class="pv4 ph3 ph5-m ph6-l mid-gray site-footer" id="colophon" role="contentinfo">
  <div class="row">
			<div class="small-12 medium-4 large-4 columns">
        <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <?php endif; ?>
   </div>
   <div class="small-12 medium-4 large-4 columns side-nav">
      <?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
      <?php endif; ?>
 </div>
 <div class="small-12 medium-4 large-4 columns">
    <?php if ( ! dynamic_sidebar( 'sidebar-3' ) ) : ?>
    <?php endif; ?>
</div>


	</div>

</footer><!-- #colophon -->


</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
