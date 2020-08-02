<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_bootstrapslider_styles' );

function theme_enqueue_bootstrapslider_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_script( 'bootstrapslider-scripts', get_stylesheet_directory_uri() . '/custom/js/bootstrapslider.js', array(), false); //enable bootstrapslider
    }
