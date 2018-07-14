<?php
/*
 * Plugin Name: CWO Add Support
 * Version: 1.0
 * Description: Listen- und Formularverwaltung für Werbepakete
 * Requires at least: 4.0
 * Tested up to: 4.9.6
 *
 * Text Domain: cwo-add-support
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-cwo-add-support.php' );
require_once( 'includes/class-cwo-add-support-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-cwo-add-support-admin-api.php' );
require_once( 'includes/lib/class-cwo-add-support-post-type.php' );
require_once( 'includes/lib/class-cwo-add-support-taxonomy.php' );

/**
 * Returns the main instance of CWO_Add_Support to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object CWO_Add_Support
 */
function CWO_Add_Support () {
	$instance = CWO_Add_Support::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = CWO_Add_Support_Settings::instance( $instance );
	}

	return $instance;
}

CWO_Add_Support();

