<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       shawnoberrath.com
 * @since      1.0.0
 *
 * @package    Thank_You_Popup_Generator
 * @subpackage Thank_You_Popup_Generator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Thank_You_Popup_Generator
 * @subpackage Thank_You_Popup_Generator/includes
 * @author     Shawn Oberrath <shawn.oberrath@powerhousetech.co>
 */
class Thank_You_Popup_Generator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'thank-you-popup-generator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
