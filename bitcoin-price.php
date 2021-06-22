<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              frumpyweb.com/frumpy
 * @since             1.0.0
 * @package           Bitcoin_Price
 *
 * @wordpress-plugin
 * Plugin Name:        Bitcoin Price
 * Plugin URI:        frumpyweb.com/wordpress/plugins/bitcoin-price
 * Description:       Use the shortcode [bitcoin_price] to display the current price of Bitcoin in USD.
 * Version:           1.0.0
 * Author:            Frumpy
 * Author URI:        frumpyweb.com/frumpy
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bitcoin-price
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
define( 'BITCOIN_PRICE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bitcoin-price-activator.php
 */
function activate_bitcoin_price() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bitcoin-price-activator.php';
	Bitcoin_Price_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bitcoin-price-deactivator.php
 */
function deactivate_bitcoin_price() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bitcoin-price-deactivator.php';
	Bitcoin_Price_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bitcoin_price' );
register_deactivation_hook( __FILE__, 'deactivate_bitcoin_price' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bitcoin-price.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bitcoin_price() {

	$plugin = new Bitcoin_Price();
	$plugin->run();

}
run_bitcoin_price();
