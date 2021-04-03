<?php
/**
 * The template for displaying the 404 template.
 */

// get the themes header.php template.
get_header();

// get the 404 page.
$not_found_page = get_page_by_title( '404' );

// if we have a 404 page.
if ( null !== $not_found_page ) {

	// get the blocks for the 404 page.
	$blocks = parse_blocks( $not_found_page->post_content );

	// create a var for the markup.
	$content = '';

	// loop through block.
	foreach ( $blocks as $block ) {

		// render this block into the content.
		$content .= render_block( $block );

	}

	// output the 404 page content - the blocks!
	echo $content;

} else {

	?>
	<p><?php esc_html_e( 'Sorry but the page you are looking for cannot be found.', 'textdomain' ); ?></p>
	<?php

}

// get the themes footer.php template.
get_footer();
