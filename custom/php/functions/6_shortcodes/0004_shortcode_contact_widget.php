<?php
/**
* Recent post shortcode
*/

function add_cr_contact_via_shortcode($atts) {
  ?>
  <div class="cr-contact">

    <?php if ( is_active_sidebar( 'cr-contact-area' ) ) : ?>

        <div id="cr-contact-area" class="cr-contact-area">
        
        <?php dynamic_sidebar( 'cr-contact-area' ); ?>

      </div>
    
      
    <?php endif; ?>
  </div>
  
<?php
}
add_shortcode('add-cr-contact', 'add_cr_contact_via_shortcode');
