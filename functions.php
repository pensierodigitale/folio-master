<?php
/**
* FolioTheme functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package FolioTheme
*/
if ( ! function_exists( 'folio_simple_portoflio_wordpress_theme_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/
// Load custom post type works
require_once( 'library/works.php' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Logo Settings',
		'menu_title'	=> 'Logo',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Social Share Settings',
		'menu_title'	=> 'Share Settings',
		'parent_slug'	=> 'theme-general-settings',
	));

}

function folio_simple_portoflio_wordpress_theme_setup() {
	/*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on FolioTheme, use a find and replace
	* to change 'folio-simple-portoflio-wordpress-theme' to the name of your theme in all the template files.
	*/
	load_theme_textdomain( 'folio-simple-portoflio-wordpress-theme', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support( 'title-tag' );
	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'folio-simple-portoflio-wordpress-theme' ),
	) );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'follow' => esc_html__( 'Follow', 'folio-simple-portoflio-wordpress-theme' ),
	) );
	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'folio_simple_portoflio_wordpress_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
function get_avatar_img_url() {
  $user_email = get_the_author_meta( 'user_email' );
  $url = 'http://gravatar.com/avatar/' . md5( $user_email );
  $url = add_query_arg( array(
    's' => 80,
    'd' => 'mm',
  ), $url );
  return esc_url_raw( $url );
}

add_action( 'after_setup_theme', 'folio_simple_portoflio_wordpress_theme_setup' );
/**
* Set the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*/
function folio_simple_portoflio_wordpress_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'folio_simple_portoflio_wordpress_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'folio_simple_portoflio_wordpress_theme_content_width', 0 );
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function folio_simple_portoflio_wordpress_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-one', 'folio-simple-portoflio-wordpress-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'folio-simple-portoflio-wordpress-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-two', 'folio-simple-portoflio-wordpress-theme' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'folio-simple-portoflio-wordpress-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-trhee', 'folio-simple-portoflio-wordpress-theme' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'folio-simple-portoflio-wordpress-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'folio_simple_portoflio_wordpress_theme_widgets_init' );

require_once get_template_directory() . '/library/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'Folio_Theme_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function Folio_Theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'advanced custom fields pro', // The plugin name.
			'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/library/plugins/advanced-custom-fields-pro.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),



		// This is an example of how to include a plugin from a GitHub repository in your theme.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
		array(
			'name'      => 'Contact Form',
			'slug'      => 'contact-form-7',
			'source'    => get_template_directory() . '/library/plugins/contact-form-7.zip', // The plugin source.
		),

		array(
			'name'      => 'Wp Pagenavi',
			'slug'      => 'wp-pagenavi',
			'source'    => get_template_directory() . '/library/plugins/wp-pagenavi.zip', // The plugin source.
		),



	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'FolioTheme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'FolioTheme' ),
			'menu_title'                      => __( 'Install Plugins', 'FolioTheme' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'FolioTheme' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'FolioTheme' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'FolioTheme' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'FolioTheme'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'FolioTheme'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'FolioTheme'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'FolioTheme'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'FolioTheme'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'FolioTheme'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'FolioTheme'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'FolioTheme'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'FolioTheme'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'FolioTheme' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'FolioTheme' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'FolioTheme' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'FolioTheme' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'FolioTheme' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'FolioTheme' ),
			'dismiss'                         => __( 'Dismiss this notice', 'FolioTheme' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'FolioTheme' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'FolioTheme' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}

/**
* Enqueue scripts and styles.
*/
function folio_simple_portoflio_wordpress_theme_scripts() {
	// Add bootstrap min main stylesheet.
	// Theme stylesheet.
	wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), '3.4.1' );

	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css', array(), '3.4.1' );
	// Add custom style.
	wp_enqueue_style( 'tachyons', get_template_directory_uri() . '/css/tachyons.min.css', array(), '3.4.1' );
	wp_enqueue_style( 'foliotheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/js/vendor/foundation.min.js', array( 'jquery' ), '20160816', true );
	wp_enqueue_script( 'classie-js', get_template_directory_uri() . '/js/classie.js', array( 'jquery' ), '20160816' );
	wp_enqueue_script( 'barba-js', get_template_directory_uri() . '/js/barba.min.js', array( 'jquery' ), '20160816' );
	wp_enqueue_script( 'snap-js', get_template_directory_uri() . '/js/snap.svg-min.js', array( 'jquery' ), '20160816' );
	wp_enqueue_script( 'svg-js', get_template_directory_uri() . '/js/svgLoader.js', array( 'jquery' ), '20160816' );
	wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '20160816', true );
	// wp_enqueue_script( 'velocityui-js', get_template_directory_uri() . '/js/velocity-ui.js', array( 'jquery' ), '20160816', true );
	// wp_enqueue_script( 'velocity-js', get_template_directory_uri() . '/js/velocity.min.js', array( 'jquery' ), '20160816', true );

	wp_enqueue_script( 'effect-js', get_template_directory_uri() . '/js/effect.js', array( 'jquery' ), '20160816', true );
	wp_enqueue_script( 'transition-js', get_template_directory_uri() . '/js/transizione.js', array( 'jquery' ), '20160816', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'folio_simple_portoflio_wordpress_theme_scripts' );
	/**
	* Add drilldown menu nav walker class.
	*
	*/
class F6_DRILL_MENU_WALKER extends Walker_Nav_Menu
{
/*
* Add vertical menu class
*/
function start_lvl( &$output, $depth = 0, $args = array() ) {
$indent = str_repeat("\t", $depth);
$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
	}
	function f6_drill_menu_fallback($args)
	{
	/*
	* Instantiate new Page Walker class instead of applying a filter to the
	* "wp_page_menu" function in the event there are multiple active menus in theme.
	*/
	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("children", "children vertical menu", $fallback);
echo '<ul class="vertical menu" data-drilldown="">'.$fallback.'</ul>';
}
//Register Menu (functions.php)
function _register_menu() {
register_nav_menu( 'drill-menu', __( 'Drill Menu','textdomain' ) );
}
//Add Menu to theme setup hook
add_action( 'after_setup_theme', '_theme_setup' );
function _theme_setup()
{
add_action( 'init', '_register_menu' );
//Theme Support
add_theme_support( 'menus' );
}
/**
* Show 15 posts for archive page.
*/
function number_of_posts_on_archive($query){
    if ($query->is_archive) {
            $query->set('posts_per_page', 12);
   }
    return $query;
}

add_filter('pre_get_posts', 'number_of_posts_on_archive');
/**
* Implement the Custom Header feature.
*/
require get_template_directory() . '/inc/custom-header.php';
/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';
/**
* Custom functions that act independently of the theme templates.
*/
require get_template_directory() . '/inc/extras.php';
/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';
/**
* Load Jetpack compatibility file.
*/
require get_template_directory() . '/inc/jetpack.php';
