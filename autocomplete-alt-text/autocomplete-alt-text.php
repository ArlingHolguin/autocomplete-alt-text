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
 * Plugin URI:        https://github.com/ArlingHolguin/autocomplete-alt-text
 * Description:       Al subir una imagen auto completa el texto alternativo de la imagen con el nombre que le hayas puesto a su imagen
 * Version:           1.0.0
 * Author:            Arling Holguin
 * Author URI:        https://github.com/ArlingHolguin/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       autocomplete-alt-text
 * Domain Path:       /languages
 */

 function auto_image_alt($attachment_id) {
	$mime_type = get_post_mime_type($attachment_id);
	if(strpos($mime_type, 'image') !== false) {
		$image_title = get_the_title($attachment_id);
		update_post_meta($attachment_id, '_wp_attachment_image_alt', $image_title);
	}
}

add_action('add_attachment', 'auto_image_alt');