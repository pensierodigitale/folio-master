<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package FolioTheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found vh-100 dt w-100 bg-pink">
				<header class="page-header dtc v-mid tc white ph3 ph4-l">
					<h1 class="page-title f6 f2-m f-subheadline-l fw6 tc"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'folio-simple-portoflio-wordpress-theme' ); ?></h1>
				</header><!-- .page-header -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


