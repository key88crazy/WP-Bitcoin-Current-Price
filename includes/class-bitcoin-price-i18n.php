<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       frumpyweb.com/frumpy
 * @since      1.0.0
 *
 * @package    Bitcoin_Price
 * @subpackage Bitcoin_Price/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bitcoin_Price
 * @subpackage Bitcoin_Price/includes
 * @author     Frumpy <frumpy@frumpyweb.com>
 */
class Bitcoin_Price_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bitcoin-price',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
