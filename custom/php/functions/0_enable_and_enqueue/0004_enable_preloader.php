<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_preloader_styles' );

function theme_enqueue_preloader_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_script( 'preloader-scripts', get_stylesheet_directory_uri() . '/custom/js/preloader.js', array(), false); //enable preloader
    }
