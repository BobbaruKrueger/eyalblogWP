<?php
/**
  * @package cssecoST
  * includes/front/reg-menus.php
  */

function csseco_reg_menus() {
	register_nav_menu( 'primary', __('Primary Menu', 'cssecotheme') );
	register_nav_menu( 'footer', __('Footer Menu', 'cssecotheme') );
}
add_action( 'after_setup_theme', 'csseco_reg_menus' );                 // register menus function