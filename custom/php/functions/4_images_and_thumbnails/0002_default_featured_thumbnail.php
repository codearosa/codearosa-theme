<?php


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
