<?php



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
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/stylemylogin.css" />';
}
add_action('login_head', 'codearosa_login');
