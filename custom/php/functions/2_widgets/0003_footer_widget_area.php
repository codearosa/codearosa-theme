<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mmu_footer_widget_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'codearosa' ),
		'id'            => 'mmu-footer-widget-1',
		'description'   => esc_html__( 'Add widgets here.', 'codearosa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2 ', 'melaniemueller.design' ),
		'id'            => 'mmu-footer-widget-2',
		'description'   => esc_html__( 'Add widgets here.', 'melaniemueller.design' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3 ', 'melaniemueller.design' ),
		'id'            => 'mmu-footer-widget-3',
		'description'   => esc_html__( 'Add widgets here.', 'melaniemueller.design' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4 ', 'melaniemueller.design' ),
		'id'            => 'mmu-footer-widget-4',
		'description'   => esc_html__( 'Add widgets here.', 'melaniemueller.design' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mmu_footer_widget_init' );
