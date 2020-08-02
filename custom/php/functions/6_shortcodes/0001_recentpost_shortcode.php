<?php
/**
* Recent post shortcode
*/

function recentpostshortcode($atts) {
  ob_start();
  get_template_part('template-particles/recentpostgrid');
  return ob_get_clean();
}
add_shortcode('recentposts', 'recentpostshortcode');
