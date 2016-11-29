<?php
/**
 * Template Name: blog
 */

get_header();
?>
<?php //var_dump(apache_request_headers());?>


	   <main id="container"  role="main">
		<?php
/*
 * Template name: Blog section template
 */
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
$args = array(
	'posts_per_page' => get_option('posts_per_page'), // the value from Settings > Reading by default
	'paged'          => $current_page // current page
);
query_posts( $args );

$wp_query->is_archive = true;
$wp_query->is_home = false;

while(have_posts()): the_post();
	?>
	<h2><?php the_title() /* post title */ ?></h2>
	ndjdnejdendejdnej
	<p><?php the_content() /* post content */ ?></p>
	<?php
endwhile;

if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function
?>
	</main><!-- .site-main -->



<?php get_footer(); ?>