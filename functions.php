<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	  wp_enqueue_script( 'popper-scripts', get_stylesheet_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );




/*-------INCLUDES Folder Custom-------*/
$codearosa_custom_functions_includes = array(
  //enqueue and enable Styles and functions
  //'/php/functions/0_enable_and_enqueue/0001_enqueue_bootstrap_slider.php',
  '/php/functions/0_enable_and_enqueue/0002_enable_blogroll.php',
  '/php/functions/0_enable_and_enqueue/0003_enable_font_preload.php',


  //Gutenberg Editor
	'/php/functions/0_gutenberg_editor/0001_enqueue_editor_styles.php',
  '/php/functions/0_gutenberg_editor/0002_enable_and _disable.php',
  '/php/functions/0_gutenberg_editor/0003_custom_font_sizes.php',
  //'/php/functions/0_gutenberg_editor/0004_custom_color-picker.php',
  '/php/functions/0_gutenberg_editor/0005_custom_theme_color.php',
  
  
  //Menus
  '/php/functions/1_menus/0001_social_menu.php',

  //WIDGETS
  '/php/functions/2_widgets/0001_topbar_widget_area.php',
  '/php/functions/2_widgets/0002_contact_widget_area.php',
  '/php/functions/2_widgets/0003_footer_widget_area.php',


  //CUSTOM WP Login
  '/php/functions/3_custom_wp_login/0001_custom_wp_login.php',

  //IMAGES AND THUMBAILS
  '/php/functions/4_images_and_thumbnails/0001_add_image_sizes.php',
  '/php/functions/4_images_and_thumbnails/0002_default_featured_thumbnail.php',

  //POSTS AND CATEGORY STYLES
  '/php/functions/5_posts_and_category_sites/0001_posts_and_excerpt_meta.php',
  '/php/functions/5_posts_and_category_sites/0002_posted_on.php',
  '/php/functions/5_posts_and_category_sites/0003_excerpt_length.php',

// SHORTCODES
  '/php/functions/6_shortcodes/0001_recentpost_shortcode.php',
  '/php/functions/6_shortcodes/0002_shortcode_primary_menu.php',
  '/php/functions/6_shortcodes/0003_shortcode_right-sidebar.php',
  '/php/functions/6_shortcodes/0004_shortcode_contact_widget.php',

);

foreach ( $codearosa_custom_functions_includes as $file ) {
	$filepath = locate_template( 'custom' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /custom%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}


if ( ! function_exists( 'myfirsttheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function myfirsttheme_setup() {
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'strong magenta', 'myfirsttheme' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => __( 'very dark gray', 'myfirsttheme' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );
 
    add_theme_support( 'wp-block-styles' );
 
    add_theme_support( 'align-wide' );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'myfirsttheme_setup' );
 
/**
 * Enqueue theme scripts and styles.
 */
function myfirsttheme_scripts() {
    wp_enqueue_style( 'myfirsttheme-style', get_stylesheet_uri() );
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'myfirsttheme_scripts' );