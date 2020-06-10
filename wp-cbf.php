<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.linkedin.com/in/dtquocbao
 * @since             1.0.0
 * @package           Wp_Ssawc
 *
 * @wordpress-plugin
 * Plugin Name:       SSActiveWear Connector
 * Plugin URI:        https://github.com/rockydant/ssactivewear
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Bao Dang
 * Author URI:        https://www.linkedin.com/in/dtquocbao
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-ssawc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-cbf-activator.php
 */
function activate_wp_cbf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cbf-activator.php';
	Wp_Cbf_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-cbf-deactivator.php
 */
function deactivate_wp_cbf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cbf-deactivator.php';
	Wp_Cbf_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_cbf' );
register_deactivation_hook( __FILE__, 'deactivate_wp_cbf' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-cbf.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_cbf() {

	$plugin = new Wp_Cbf();
	$plugin->run();

}
run_wp_cbf();
