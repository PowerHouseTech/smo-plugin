<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              shawnoberrath.com
 * @since             1.0.0
 * @package           Thank_You_Popup_Generator
 *
 * @wordpress-plugin
 * Plugin Name:       Thank-You Popup Generator
 * Description:       Thank-You Popup Generator is an extension of WooCommerce that adds a popup window after checkout, giving one last opportunity to enhance the customer's shopping experience.
 * Version:           1.0.0
 * Author:            Shawn Oberrath
 * Author URI:        shawnoberrath.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       thank-you-popup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
//define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-thank-you-popup-generator-activator.php
 */
function activate_thank_you_popup_generator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-thank-you-popup-generator-activator.php';
	Thank_You_Popup_Generator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-thank-you-popup-generator-deactivator.php
 */
function deactivate_thank_you_popup_generator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-thank-you-popup-generator-deactivator.php';
	Thank_You_Popup_Generator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_thank_you_popup_generator' );
register_deactivation_hook( __FILE__, 'deactivate_thank_you_popup_generator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-thank-you-popup-generator.php';

// if admin area
if ( is_admin() ) {

	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/register-settings.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';

}

//include dependencies for both admin and public

require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_thank_you_popup_generator() {

	$plugin = new Thank_You_Popup_Generator();
	$plugin->run();

}
run_thank_you_popup_generator();

// default plugin options
function ty_popup_options_default() {

	return array(
		'custom_ty_message'     => 'Custom Thank You Message',
		//'ty_popup_main_background'   => '#ffffff',
		//'ty_popup_second_background'   => '#ffffff',
		//'ty_popup_main_font_color'   => '#ffffff',
		//'ty_popup_second_font_color'   => '#ffffff'
		);

}

