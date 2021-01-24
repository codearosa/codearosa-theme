<?php
/*
*GUTENBERG
*/

/**
 * Enqueue editor styles for Gutenberg
 */

function codearosa_editor_styles() {
	wp_enqueue_style( 'codearosa-editor-style', get_stylesheet_directory_uri() . '/css/custom-editor-style.css', 100 );

}
add_action( 'enqueue_block_editor_assets', 'codearosa_editor_styles' );
