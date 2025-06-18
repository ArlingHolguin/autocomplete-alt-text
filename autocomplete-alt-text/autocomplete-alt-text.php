<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/ArlingHolguin
 * @since             1.0.0
 * @package           Autocomplete_Alt_Text
 *
 * @wordpress-plugin
 * Plugin Name:       Autocomplete Alt Text
 * Plugin URI:        https://github.com/ArlingHolguin?tab=repositories
 * Description:       Al subir una imagen auto completa el texto alternativo de la imagen con el nombre que ñle hayas puesto a su imagen
 * Version:           1.0.0
 * Author:            Arling Holguin
 * Author URI:        https://github.com/ArlingHolguin/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       autocomplete-alt-text
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
define( 'AUTOCOMPLETE_ALT_TEXT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-autocomplete-alt-text-activator.php
 */
function activate_autocomplete_alt_text() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-autocomplete-alt-text-activator.php';
	Autocomplete_Alt_Text_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-autocomplete-alt-text-deactivator.php
 */
function deactivate_autocomplete_alt_text() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-autocomplete-alt-text-deactivator.php';
	Autocomplete_Alt_Text_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_autocomplete_alt_text' );
register_deactivation_hook( __FILE__, 'deactivate_autocomplete_alt_text' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-autocomplete-alt-text.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_autocomplete_alt_text() {

	$plugin = new Autocomplete_Alt_Text();
	$plugin->run();

}
run_autocomplete_alt_text();
