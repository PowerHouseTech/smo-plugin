<?php //Thank-You Popup Admin Menu

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// add sub-level administrative menu
function ty_popup_add_sublevel_menu() {
	
	/*
	
	add_submenu_page(
		string   $parent_slug,
		string   $page_title,
		string   $menu_title,
		string   $capability,
		string   $menu_slug,
		callable $function = ''
	);
	
	*/
	
	add_submenu_page(
		'options-general.php',
		'Thank-You Popup Settings',
		'Thank-You Popup',
		'manage_options',
		'thank-you-popup',
		'ty_popup_display_settings_page'
	);
	
}
add_action( 'admin_menu', 'ty_popup_add_sublevel_menu' );

