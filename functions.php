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
  '/php/functions/0_enable_and_enqueue/0001_enqueue_bootstrap_slider.php',
  '/php/functions/0_enable_and_enqueue/0002_enable_blogroll.php',

  //Gutenberg Editor
	'/php/functions/0_gutenberg_editor/0001_enqueue_editor_styles.php',
  '/php/functions/0_gutenberg_editor/0002_color_palette_enqueue_styles.php',
  '/php/functions/0_gutenberg_editor/0003_custom_font_sizes.php',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
  '/php/functions/0_gutenberg_editor/0004_custom_color-picker.php',
  '/php/functions/0_gutenberg_editor/0005_custom_theme_color.php',

  
>>>>>>> parent of 7b8277a9... Update functions.php
=======
>>>>>>> parent of dfe24507... Merge pull request #3 from codearosa/neumorph-light-styleguide
=======
>>>>>>> parent of dfe24507... Merge pull request #3 from codearosa/neumorph-light-styleguide
=======
>>>>>>> parent of dfe24507... Merge pull request #3 from codearosa/neumorph-light-styleguide
=======
>>>>>>> parent of dfe24507... Merge pull request #3 from codearosa/neumorph-light-styleguide
=======
>>>>>>> parent of dfe24507... Merge pull request #3 from codearosa/neumorph-light-styleguide

  //Menus
  '/php/functions/1_menus/0001_social_menu.php',

  //WIDGETS
  '/php/functions/2_widgets/0001_topbar_widget_area.php',

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
);

foreach ( $codearosa_custom_functions_includes as $file ) {
	$filepath = locate_template( 'custom' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /custom%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
