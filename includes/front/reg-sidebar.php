<?php
/**
 * @package eyalb
 * includes/front/reg-widgets.php
 *
 * Register sidebar and widgets
 */
function csseco_sidebar_widgets_init() {
	register_sidebar( array (
		'name'              => __('Sidebar', 'eyalb'),
		'id'                => 'csseco_sidebar',
		'description'       => __( 'Widget area', 'eyalb'),
		'class'             => '',
		'before_widget'     => '<section id="%1$s" class="csseco-widget %2$s">',
		'after_widget'      => '</section>',
		'before_title'      => '<h3 class="csseco-widget-title">',
		'after_title'       => '</h3>'
	) );
	
	register_sidebar( array (
		'name'              => __('Footer Widget Left', 'eyalb'),
		'id'                => 'footer_widget_left',
		'description'       => __( 'Footer Widget 1st column', 'eyalb'),
		'class'             => '',
		'before_widget'     => '<section id="%1$s" class="csseco-widget %2$s">',
		'after_widget'      => '</section>',
		'before_title'      => '<h3 class="csseco-widget-title">',
		'after_title'       => '</h3>'
	) );
	
	register_sidebar( array (
		'name'              => __('Footer Widget Middle', 'eyalb'),
		'id'                => 'footer_widget_middle',
		'description'       => __( 'Footer Widget 2nd column', 'eyalb'),
		'class'             => '',
		'before_widget'     => '<section id="%1$s" class="csseco-widget %2$s">',
		'after_widget'      => '</section>',
		'before_title'      => '<h3 class="csseco-widget-title">',
		'after_title'       => '</h3>'
	) );
	
	register_sidebar( array (
		'name'              => __('Footer Widget Right', 'eyalb'),
		'id'                => 'footer_widget_right',
		'description'       => __( 'Footer Widget 3rd column', 'eyalb'),
		'class'             => '',
		'before_widget'     => '<section id="%1$s" class="csseco-widget %2$s">',
		'after_widget'      => '</section>',
		'before_title'      => '<h3 class="csseco-widget-title">',
		'after_title'       => '</h3>'
	) );
	
}
add_action( 'widgets_init', 'csseco_sidebar_widgets_init' );                   // register widget area(sidebar)