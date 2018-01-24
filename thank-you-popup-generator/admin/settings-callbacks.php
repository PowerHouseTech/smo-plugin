<?php // Thank-You Popup Settings Callbacks

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


// callback for settings section
function ty_popup_callback_section() {
}

// check if WooCommerce is installed
function ty_popup_init() {

		if (!class_exists('WC_Checkout')) {
			echo "<h1 style='color: red; text-align: center;'>The Thank-You Popup Generator is an extension of WooCommerce. Please install the WooCommerce plugin before proceeding.</h1>";
		}

		else {

			// callback: textarea field
			function ty_popup_callback_field_textarea( $args ) {
	
				$options = get_option( 'ty_popup_options', ty_popup_options_default() );
	
				$id    = isset( $args['id'] )    ? $args['id']    : '';
				$label = isset( $args['label'] ) ? $args['label'] : '';
	
				$allowed_tags = wp_kses_allowed_html( 'post' );
	
				$value = isset( $options[$id] ) ? wp_kses( stripslashes_deep( $options[$id] ), $allowed_tags ) : '';
	
				echo '<textarea id="ty_popup_options_'. $id .'" name="ty_popup_options['. $id .']" rows="5" cols="50">'. $value .'</textarea><br />';
				echo '<label for="ty_popup_options_'. $id .'">'. $label .'</label>';
			}

			// callback: text fields
			/*  This section will call back text fields for color picker options; need to get the settings to save before this is functional

			function ty_popup_callback_field_text( $args ) {
	
				$options = get_option( 'ty_popup_options', ty_popup_options_default() );
			
				$id    = isset( $args['id'] )    ? $args['id']    : '';
				$label = isset( $args['label'] ) ? $args['label'] : '';

				$value = isset( $options[$id] ) && !empty($options[$id]) ? sanitize_text_field($options[$id]) : '';

				// check if valid hex color
				if ( !empty($options[$id]) && !preg_match('/^#[a-f0-9]{6}$/i', $options[$id]) ) { 

					// set error message
					add_settings_error('ty_popup_main_background', 'ty_popup_main_background_error', 'Please insert a valid hex value color', 'error');
				}
	
				echo '<input type="text" name="color" id="my-color-field" value="'.$value.'" class="my-color-field" default="#ffffff"/>';
			}
			*/
		}
}

add_action('plugins_loaded', 'ty_popup_init');