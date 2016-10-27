<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

  <div class="small-4 large-4 medium-4 columns">
								<?php twentysixteen_post_thumbnail(); ?>
								<?php the_title( sprintf( '<span class="entry-title"><a class="archive-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span>' ); ?>
									<?php twentysixteen_excerpt(); ?>
								<h5>

								</h5>
								<p>

									<?php
										edit_post_link(
											sprintf(
												/* translators: %s: Name of current post */
												__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
												get_the_title()
											),
											'<span class="edit-link">',
											'</span>'
										);
									?>
								</p>
     </div>
