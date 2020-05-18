<?php

/**
 * Plugin Name: First Plugin
 * Plugin URI:
 * Description: First test plugin.
 * Version: 0.0.1
 * Author: Duy Lee
 */

define( 'FP_VERSION', '0.0.1' );

define( 'FP_REQUIRED_WP_VERSION', '4.9' );

define( 'FP_PLUGIN', __FILE__ );

define( 'FP_PLUGIN_BASENAME', plugin_basename( FP_PLUGIN ) );

define( 'FP_PLUGIN_NAME', trim( dirname( FP_PLUGIN_BASENAME ), '/' ) );

define( 'FP_PLUGIN_DIR', untrailingslashit( dirname( FP_PLUGIN ) ) );

define( 'FP_PLUGIN_MODULES_DIR', FP_PLUGIN_DIR . '/modules' );


if ( is_admin() ) {
	require_once FP_PLUGIN_DIR . '/includes/admin/menu/adminMenu.php';
}