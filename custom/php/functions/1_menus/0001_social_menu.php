<?php
//Register Menus
register_nav_menus( array(
'socialmenu' => __( 'Social Menu', 'codearosa' ),
) );

/**
* Socialmenu shortcode
*/

function socialmenushortcode($atts) {
  ob_start();
  get_template_part('custom/php/template-parts/socialmenu');
  return ob_get_clean();
}
add_shortcode('socialmenu', 'socialmenushortcode');
