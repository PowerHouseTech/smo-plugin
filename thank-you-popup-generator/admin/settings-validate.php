<?php // Thank-You Popup Validate Settings

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


// callback: validate options
function ty_popup_callback_validate_options( $input ) {
	
	
	// custom message
	if ( isset( $input['custom_ty_message'] ) ) {
		
		$input['custom_ty_message'] = wp_kses_post( $input['custom_ty_message'] );
	}

	// custom text fields
	/* Validate color picker input; need to get the code worked out for 'ty_popup_main_background' and then add the appropriate code for the other sections

	$input['ty_popup_main_background'] = ( isset( $input['ty_popup_main_background'] ) && !empty($input['ty_popup_main_background']) ) ? sanitize_text_field($input['ty_popup_main_background']) : '';
		
		// check if valid hex color
		if ( !empty($input['ty_popup_main_background']) && !preg_match('/^#[a-f0-9]{6}$/i', $input['ty_popup_main_background']) ) { 

		// set error message
			add_settings_error('ty_popup_main_background', 'ty_popup_main_background_error', 'Please insert a valid hex value color', 'error');
		} 
	

	if ( isset( $input['ty_popup_second_background'] ) ) {
		
		$input['ty_popup_second_background'] = sanitize_text_field( $input['ty_popup_second_background'] );
		
	}

	if ( isset( $input['ty_popup_main_font_color'] ) ) {
		
		$input['ty_popup_main_font_color'] = sanitize_text_field( $input['ty_popup_main_font_color'] );
		
	}

	if ( isset( $input['ty_popup_second_font_color'] ) ) {
		
		$input['ty_popup_second_font_color'] = sanitize_text_field( $input['ty_popup_second_font_color'] );
		
	}
	*/
	
	return $input;
}