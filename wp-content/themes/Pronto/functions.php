<?php
/**
 * Pronto functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Pronto
 * @since Pronto 1.0
 */



/*--------------------------------------*/
/* Define Constants
/*--------------------------------------*/
define( 'ATT_JS_DIR', get_template_directory_uri().'/js' );
define( 'ATT_CSS_DIR', get_template_directory_uri().'/css' );


/*--------------------------------------*/
/* Globals
/*--------------------------------------*/
if ( ! isset( $content_width ) )
	$content_width = 650;


/*--------------------------------------*/
/* Include helper functions
/*--------------------------------------*/
require_once( get_template_directory() .'/functions/options-fallback.php' );
require_once( get_template_directory() .'/functions/scripts.php' );
require_once( get_template_directory() .'/functions/social.php' );
require_once( get_template_directory() .'/functions/widgets/widget-areas.php' );
require_once( get_template_directory() .'/functions/font-awesome.php');
require_once( get_template_directory() .'/functions/custom-excerpt.php');

if( is_admin() ) {
	
	require_once ( get_template_directory() .'/functions/recommend-plugins.php' );
	require_once( get_template_directory() .'/functions/meta/meta-slides.php');
	require_once( get_template_directory() .'/functions/meta/meta-services.php' );
	
} else {
	
	require_once( get_template_directory() .'/functions/external-plugins-support.php' );
	require_once( get_template_directory() .'/functions/comments-callback.php');
	require_once( get_template_directory() .'/functions/image-default-sizes.php');
	require_once( get_template_directory() .'/functions/pagination.php');
	require_once( get_template_directory() .'/functions/aqua-resizer.php');
	require_once( get_template_directory() .'/functions/aqua-resizer-ratio-check.php');
	
}



/*--------------------------------------*/
/* Theme Setup
/*--------------------------------------*/
add_action( 'after_setup_theme', 'grid_setup' );
function grid_setup() {
	
	// Localization support
	load_theme_textdomain( 'wpex', get_template_directory() .'/languages' );
	
	// Editor CSS
	// add_editor_style( 'css/editor-style.css' );

	// Register navigation menus
	register_nav_menus (
		array(
			'main_menu' => __('Main','wpex')
		)
	);
		
	// Add theme support
	add_theme_support('automatic-feed-links');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	
	/* Infinite scroll via Jetpack
	add_theme_support( 'infinite-scroll', array(
    	'container' => 'infinite-wrap'
	) ); */

}
register_post_type('event', array(
	'labels' => array(
	   'name' => 'Events',
	   'singular_name' => 'Event',
	   'add_new_item' => 'Add New Event',
	   'edit_item' => 'Edit Event',
	   'new_item' => 'New Event',
	   'view_item' => 'View Event',
	   'search_items' => 'Search Events',
	   'not_found' => 'No events found',
	   'not_found_in_trash' => 'No events found in Trash'
	),
	'singular_label' => __('Event'),
	'public' => true,
	'show_ui' => true, // UI in admin panel
	'capability_type' => 'post',
	'hierarchical' => false,
	'has_archive' => 'events',
	'rewrite' => array("slug" => "events", 'with_front' => false), // Permalinks format
	'supports' => array('title', 'editor', 'revisions', 'page-attributes'),
	'menu_position' => 6
));

/*register_post_type('faculty', array(
	'labels' => array(
	   'name' => 'Faculty',
	   'singular_name' => 'Faculty',
	   'add_new_item' => 'Add New Faculty',
	   'edit_item' => 'Edit Faculty',
	   'new_item' => 'New Faculty',
	   'view_item' => 'View Faculty',
	   'search_items' => 'Search Faculty',
	   'not_found' => 'No members found',
	   'not_found_in_trash' => 'No members found in Trash'
	),
	'singular_label' => __('Faculty'),
	'public' => true,
	'show_ui' => true, // UI in admin panel
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array("slug" => "faculty"), // Permalinks format
	'supports' => array('title', 'editor','revisions'),
	'menu_position' => 7
));

register_post_type('class', array(
	'labels' => array(
	   'name' => 'Class',
	   'singular_name' => 'Class',
	   'add_new_item' => 'Add New Class',
	   'edit_item' => 'Edit Class',
	   'new_item' => 'New Class',
	   'view_item' => 'View Class',
	   'search_items' => 'Search Class',
	   'not_found' => 'No class found',
	   'not_found_in_trash' => 'No class found in Trash'
	),
	'singular_label' => __('Class'),
	'public' => true,
	'show_ui' => true, // UI in admin panel
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array("slug" => "class"), // Permalinks format
	'supports' => array('title', 'editor', 'revisions'),
	'menu_position' => 8
));


/*function event() 
{
	$labels = array(
		'name'               => _x( 'Events', 'post type general name' ),
		'singular_name'      => _x('Event', 'post type singular name' ),
		'add_new'            => _x('Add New', 'event' ),
		'add_new_item'       => __( 'Add New Event' ),
		'edit_item'          => __( 'Edit Event' ),
		'new_item'           => __( 'New Event' ),
		'all_items'          => __( 'All Events' ),
		'view_item'          => __( 'View Event' ),
		'search_items'       => __( 'Search Events' ),
		'not_found'          => __( 'No events found' ),
		'not_found_in_trash' => __( 'No events found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Events'
		);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds events and event data',
		'public'        => true,
		'menu_position' => 2,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
		);
	register_post_type( 'event', $args );
}

add_action( 'init', 'event');*/
