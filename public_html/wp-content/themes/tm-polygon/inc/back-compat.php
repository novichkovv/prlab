<?php
/**
 * tm_polygon back compat functionality
 *
 * Prevents tm_polygon from running on WordPress versions prior to 3.9,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 3.9.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since tm_polygon 1.0
 */

/**
 * Prevent switching to tm_polygon on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since tm_polygon 1.0
 */
function tm_polygon_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'tm_polygon_upgrade_notice' );
}

add_action( 'after_switch_theme', 'tm_polygon_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * tm_polygon on WordPress versions prior to 3.9.
 *
 * @since Twenty Fifteen 1.0
 */
function tm_polygon_upgrade_notice() {
	$message = sprintf( __( 'tm_polygon requires at least WordPress version 3.9. You are running version %s. Please upgrade and try again.', 'tm-polygon' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 3.9.
 *
 * @since tm_polygon 1.0
 */
function tm_polygon_customize() {
	wp_die( sprintf( __( 'tm_polygon requires at least WordPress version 3.9. You are running version %s. Please upgrade and try again.', 'tm-polygon' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}

add_action( 'load-customize.php', 'tm_polygon_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.9.
 *
 * @since tm_polygon 1.0
 */
function tm_polygon_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'tm_polygon requires at least WordPress version 3.9. You are running version %s. Please upgrade and try again.', 'tm-polygon' ), $GLOBALS['wp_version'] ) );
	}
}

add_action( 'template_redirect', 'tm_polygon_preview' );
