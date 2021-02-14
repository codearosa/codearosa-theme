<?php
/*
*GUTENBERG
*/

/**
 * Enqueue editor styles for Gutenberg
 */

function codearosa_editor_styles() {
	wp_enqueue_style( 'codearosa-editor-style', get_stylesheet_directory_uri() . '/cssPurge/custom-editor-style.css', array(), '1.0' );

}
add_action( 'enqueue_block_editor_assets', 'codearosa_editor_styles' );
