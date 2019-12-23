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

//Register Menus
register_nav_menus( array(
'socialmenu' => __( 'Social Menu', 'codearosa' ),
) );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function codearosa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Topbar', 'codearosa' ),
		'id'            => 'topbar',
		'description'   => esc_html__( 'Add widgets here.', 'codearosa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'codearosa_widgets_init' );

/**
* Recent post shortcode
*/

function recentpostshortcode($atts) {
  ob_start();
  get_template_part('template-particles/recentpostgrid');
  return ob_get_clean();
}
add_shortcode('recentposts', 'recentpostshortcode');

/**
* Socialmenu shortcode
*/

function socialmenushortcode($atts) {
  ob_start();
  get_template_part('template-particles/socialmenu');
  return ob_get_clean();
}
add_shortcode('socialmenu', 'socialmenushortcode');


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/*Login  styles*/
function custom_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );


/**
*WP Login css
*/

function codearosa_login()
{
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/sass/css/stylemylogin.min.css" />';
}
add_action('login_head', 'codearosa_login');

/**
*Enable Blogroll
*/

add_filter( 'pre_option_link_manager_enabled', '__return_true' );


/*
*GUTENBERG
*/

/**
 * Enqueue editor styles for Gutenberg
 */
function codearosa_editor_styles() {
	wp_enqueue_style( 'codearosa-editor-style', get_stylesheet_directory_uri() . '/sass/css/custom-editor-style.min.css' );

}
add_action( 'enqueue_block_editor_assets', 'codearosa_editor_styles' );

/*colors*/
/**
* Add support for Gutenberg.
*
* @link https://wordpress.org/gutenberg/handbook/reference/theme-support/
*/
function mytheme_setup_theme_supported_features() {

		// Theme supports wide images, galleries and videos.
		add_theme_support( 'align-wide' );

		// Make specific theme colors available in the editor.
    add_theme_support( 'editor-color-palette',
        array(
            'name' => 'primary',
            'color' => '#C8689A',
        ),
        array(
            'name' => 'secondary',
            'color' => '#ffffff',
        ),
        array(
            'name' => 'success',
            'color' => '#60B7C1',
        )
    );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );



/*add default featured thumbnail*/

function codearosa_post_thumbnail_html( $html ) {
    // If there is no post thumbnail,
    // Return a default image
    if ( '' == $html ) {
        return '<img src="' . get_bloginfo( 'url' ) . '/wp-content/uploads/2019/01/Codearosa-Webdesign-und-Marketing-default-featured-Image.png" width="1920px" height="1080px" class="image-size-name" />';
    }
    // Else, return the post thumbnail
    return $html;
}
add_filter( 'post_thumbnail_html', 'codearosa_post_thumbnail_html' );

/**
*
*Codearosa posted on
*/
function codearosa_posted_on() {
/*Author pics*/
$get_author_id = get_the_author_meta('ID');
$get_author_gravatar = get_avatar_url($get_author_id, array("size"=>150));
$gravatar_image = '<img src="'.$get_author_gravatar.'" alt="" class="rounded-circle text-center wp-image-10"/>';
/*author description*/
$author_meta = nl2br(get_the_author_meta('description'));
/*get author mail*/
$author_mail = (get_the_author_meta('user_email'));

  $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() ),
    esc_attr( get_the_modified_date( 'c' ) ),
    esc_html( get_the_modified_date() )
  );
  $posted_on   = apply_filters(
    'understrap_posted_on', sprintf(
      '<span class="posted-on">%1$s <a href="%2$s" rel="bookmark">%3$s</a></span>',
      esc_html_x( 'Veröffentlicht am', 'post date', 'understrap' ),
      esc_url( get_permalink() ),
      apply_filters( 'understrap_posted_on_time', $time_string )
    )
  );
  $byline      = apply_filters(
    'understrap_posted_by', sprintf(
      '<span class="byline"> %1$s<span class="author vcard"><a class="url fn n" href="%2$s"> %3$s</a></span></span>',
      $posted_on ? esc_html_x( 'von', 'post author', 'understrap' ) : esc_html_x( 'Posted by', 'post author', 'understrap' ),
      esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
      esc_html( get_the_author() )
    )
  );
  echo '<div class="text-center my-2">'.$gravatar_image.'</div>
        <div class="container text-center"><div class="m-4 lead">'.$author_meta.'</div>
        <a href="mailto:'.$author_mail.'" class="my-3 btn btn-primary text-white" role="button">Arbeite mit mir</a></div>'; // WPCS: XSS OK.
}

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'understrap_posted_on' ) ) {
	function understrap_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s"> %2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s"> (%4$s) </time>';
		}
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		$posted_on   = apply_filters(
			'understrap_posted_on', sprintf(
				'<span class="posted-on">%1$s <a href="%2$s" rel="bookmark">%3$s</a></span>',
				esc_html_x( 'Veröffentlicht am', 'post date', 'understrap' ),
				esc_url( get_permalink() ),
				apply_filters( 'understrap_posted_on_time', $time_string )
			)
		);
		$byline      = apply_filters(
			'understrap_posted_by', sprintf(
				'<span class="byline"> %1$s<span class="author vcard"><a class="url fn n" href="%2$s"> %3$s</a></span></span>',
				$posted_on ? esc_html_x( 'von', 'post author', 'understrap' ) : esc_html_x( 'Posted by', 'post author', 'understrap' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_html( get_the_author() )
			)
		);
		echo $posted_on . $byline; // WPCS: XSS OK.
	}
}



/*REFERENZ IMAGE SIZES*/

// Add other useful image sizes for use through Add Media modal
add_image_size( 'Referenz', 1900, 1110 );


// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'medium-height' => __( 'Referenz' ),
    ) );
}
