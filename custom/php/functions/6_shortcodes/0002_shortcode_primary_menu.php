<?php
/**
* Recent post shortcode
*/

function add_primary_menu_via_shortcode($atts) {
  ob_start();
  get_template_part( 'custom/php/menu/menu-primary', 'none' );
  return ob_get_clean();
}
add_shortcode('addprimarymenu', 'add_primary_menu_via_shortcode');
