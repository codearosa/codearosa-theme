<?php


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
