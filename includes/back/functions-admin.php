<?php
/**
  * @package eyalb
  * includes/back/functions-admin.php
  *
  */
function csseco_add_admin_page() {
	
	/**
	 * ================
	 *      Generate main theme option page
	 * ================
	 */
	add_menu_page( 
		__('CSSeco Theme Option', 'eyalb'),
		__('CSSeco Theme', 'eyalb'),
		'manage_options',
		'csseco_theme_options_page',
		'csseco_theme_create_page',
		get_template_directory_uri() . '/imgs/csseco_admin_icon.png',
		110
	);
	
	/**
	 * ================
	 *      Generate main theme option secondary page/pages
	 * ================
	 */
	add_submenu_page( // page #1(same as csseco_theme_options_page)
		'csseco_theme_options_page',
		__('CSSeco Theme Option', 'eyalb'),
		__('General Settings', 'eyalb'),
		'manage_options',
		'csseco_theme_options_page',
		'csseco_theme_create_page'
	);
	
	add_submenu_page( // page #2
		'csseco_theme_options_page',
		__('Theme Settings', 'eyalb'),
		__('Theme Settings', 'eyalb'),
		'manage_options',
		'csseco_theme_options_page_2',
		'csseco_theme_support_page'
	);
	
	add_submenu_page( // page #3
		'csseco_theme_options_page',
		__('Footer Settings', 'eyalb'),
		__('Footer Settings', 'eyalb'),
		'manage_options',
		'csseco_theme_options_page_3',
		'csseco_theme_footer_page'
	);
	
	
	
	// Activate custom settings
	add_action( 'admin_init', 'eyalb_custom_settings' );
	
}
add_action( 'admin_menu', 'csseco_add_admin_page' );



/**
 * ================
 *      Custom Settings api
 * ================
 */
function eyalb_custom_settings() {
	
	/***
	  * General Settings Page - settings, sections and fields
	  */
	// Settings
	register_setting( 'eyalb-setting-group', 'logo' ); // picture upload
	register_setting( 'eyalb-setting-group', 'tw', 'csseco_sanitize_twitter_handler' );
	register_setting( 'eyalb-setting-group', 'fb');
	register_setting( 'eyalb-setting-group', 'gp' );
	
	// Sections
	add_settings_section( 'eyalb-main-options', __( 'General Settings', 'eyalb' ), 'eyalb_general_options', 'csseco_theme_create_page' );
	add_settings_section( 'eyalb-mainsm-options', __( 'Social Media Settings', 'eyalb' ), 'eyalb_social_options', 'csseco_theme_create_page' );
	
	// Fields
	add_settings_field( 'logo-setting', __( 'Logo', 'eyalb' ), 'eyalb_logo', 'csseco_theme_create_page', 'eyalb-main-options' );
	add_settings_field( 'tw-setting', 'Twitter', 'eyalb_smtw', 'csseco_theme_create_page', 'eyalb-mainsm-options' );
	add_settings_field( 'fb-setting', 'Facebook', 'eyalb_smfb', 'csseco_theme_create_page', 'eyalb-mainsm-options' );
	add_settings_field( 'gp-setting', 'Google +', 'eyalb_smgp', 'csseco_theme_create_page', 'eyalb-mainsm-options' );
	
	/***
	  * Theme Settings Page - settings, sections and fields
	  */
	// Settings
	register_setting( 'eyalb-theme-support', 'csseco_post_formats', 'eyalb_post_formats_callback' );
	
	// Sections
	add_settings_section( 'eyalb-theme-options', __( 'Theme Settings', 'eyalb' ), 'eyalb_theme_options', 'csseco_theme_support_page' );
	
	// Fields
	add_settings_field( 'post-formats', __( 'Post Formats', 'eyalb' ), 'eyalb_post_formats', 'csseco_theme_support_page', 'eyalb-theme-options' );
	
	/***
	  * Footer Settings Page - settings, sections and fields
	  */
	// Settings
	register_setting( 'eyalb-footer-group', 'flogo' );
	register_setting( 'eyalb-footer-group', 'fabout_us' );
	
	// Sections
	add_settings_section( 'eyalb-footer-options', __( 'Footer Settings', 'eyalb' ), 'eyalb_footer_options', 'csseco_theme_footer_page' );
	
	// Fields
	add_settings_field( 'flogo-setting', __( 'Logo', 'eyalb' ), 'eyalb_flogo', 'csseco_theme_footer_page', 'eyalb-footer-options' );
	add_settings_field( 'fabout_us-setting', __( 'About Us', 'eyalb' ), 'eyalb_fabout', 'csseco_theme_footer_page', 'eyalb-footer-options' );
	add_settings_field( 'fsocial_media', __( 'Social Media', 'eyalb' ), 'eyalb_sm', 'csseco_theme_footer_page', 'eyalb-footer-options' );
	
}



/**
 * ================
 *      Sanitization and Callback Functions
 * ================
 */
function eyalb_post_formats_callback( $input ) {
	return $input;
}

function csseco_sanitize_twitter_handler( $input ) {
	$output = sanitize_text_field( $input );
	$output = str_replace( '@', '', $output );
	return $output;
}

/**
 * ================
 *      Pages code generation
 * ================
 */
function csseco_theme_create_page() {
	require_once( get_template_directory() . '/includes/back/templates/csseco-general-opts.php' );
	
}

function csseco_theme_support_page() {
	require_once( get_template_directory() . '/includes/back/templates/csseco-theme-opts.php' );
}

function csseco_theme_footer_page() {
	require_once( get_template_directory() . '/includes/back/templates/csseco-footer-opts.php' );
}