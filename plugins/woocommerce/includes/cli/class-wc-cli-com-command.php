<?php
/**
 * WC_CLI_COM_Command class file.
 *
 * @package WooCommerce\CLI
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Allows to interact with extensions from WCCOM marketplace via CLI.
 *
 * @version 6.8
 * @package WooCommerce
 */
class WC_CLI_COM_Command {
	/**
	 * Registers a command for showing WooCommerce Tracker snapshot data.
	 */
	public static function register_commands() {
		WP_CLI::add_command( 'wc com install', array( 'WC_CLI_COM_Command', 'install_extension' ) );
		WP_CLI::add_command( 'wc com list', array( 'WC_CLI_COM_Command', 'list_extensions' ) );
	}

	/**
	 *
	 *
	 * ## EXAMPLES
	 *
	 * wp wc com extension list
	 *
	 * @param  array  $args  WP-CLI positional arguments.
	 * @param  array  $assoc_args  WP-CLI associative arguments.
	 *
	 */
	public static function list_extensions( array $args, array $assoc_args ) {
	}

	/**
	 * Dump tracker snapshot data to screen.
	 *
	 * ## OPTIONS
	 *
	 * <extension>
	 * : One or more plugins to install. Accepts a plugin slug
	 *
	 * [--activate]
	 * : If set, the plugin will be activated immediately after install.
	 *
	 * ## EXAMPLES
	 *
	 * wp wc com extension install automatewoo
	 * wp wc com extension install woocommerce-subscriptions --activate
	 *
	 * @param  array  $args  WP-CLI positional arguments.
	 * @param  array  $assoc_args  WP-CLI associative arguments.
	 *
	 */
	public static function install_extension( array $args, array $assoc_args ) {
	}
}