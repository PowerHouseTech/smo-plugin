<?php // Thank-You Popup Register Settings

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// register plugin settings
function ty_popup_register_settings() {
	
	/*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback
	);
	
	*/
	
	register_setting( 
		'thank-you-popup', 
		'ty_popup_options', 
		'ty_popup_callback_validate_options' 
	); 

	/*
	
	add_settings_section( 
		string   $id, 
		string   $title, 
		callable $callback, 
		string   $page
	);
	
	*/
	
	add_settings_section( 
		'thank-you-popup', 
		'', 
		'ty_popup_callback_section', 
		'thank-you-popup'
	);
	
	/*

	add_settings_field(
    	string   $id,
		string   $title,
		callable $callback,
		string   $page,
		string   $section = 'default',
		array    $args = []
	);

	*/

	add_settings_field(
		'custom_ty_message',
		'Your Custom Thank You Message',
		'ty_popup_callback_field_textarea',
		'thank-you-popup',
		'thank-you-popup',
		[ 'id' => 'custom_ty_message', 'label' => '' ]
	);

/* Add settings fields for custom color settings

	add_settings_field(
		'ty_popup_main_background',
		'Main Background Color',
		'ty_popup_callback_field_text',
		'thank-you-popup',
		'thank-you-popup',
		[ 'id' => 'ty_popup_main_background', 'label' => '' ]
	);

	add_settings_field(
		'ty_popup_second_background',
		'Secondary Background Color',
		'ty_popup_callback_field_text',
		'thank-you-popup',
		'thank-you-popup',
		[ 'id' => 'ty_popup_second_background', 'label' => '' ]
	);

	add_settings_field(
		'ty_popup_main_font_color',
		'Main Font Color',
		'ty_popup_callback_field_text',
		'thank-you-popup',
		'thank-you-popup',
		[ 'id' => 'ty_popup_main_font_color', 'label' => '' ]
	);

		add_settings_field(
		'ty_popup_second_font_color',
		'Secondary Font Color',
		'ty_popup_callback_field_text',
		'thank-you-popup',
		'thank-you-popup',
		[ 'id' => 'ty_popup_second_font_color', 'label' => '' ]
	);
*/
	
}
add_action( 'admin_init', 'ty_popup_register_settings' );

