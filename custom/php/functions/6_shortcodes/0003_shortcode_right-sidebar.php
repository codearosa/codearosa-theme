<?php
/**
* Recent post shortcode
*/

function add_right_sidebar_via_shortcode($atts) {
  ?>
  <div class="addrightsidebar">
    <?php
      ob_start();
       get_search_form();
      get_template_part( 'sidebar-templates/sidebar', 'right' );
      get_template_part( 'custom/php/template-parts/recentpostgrid' );
      return ob_get_clean();
    ?>
  </div>
<?php
}
add_shortcode('addrightsidebar', 'add_right_sidebar_via_shortcode');
