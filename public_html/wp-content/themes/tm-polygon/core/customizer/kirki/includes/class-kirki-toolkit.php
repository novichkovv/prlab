<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Early exit if the class already exists
if ( class_exists( 'Kirki_Toolkit' ) ) {
	return;
}

class Kirki_Toolkit {

	/** @var Kirki The only instance of this class */
	public static $instance = null;

	public static $version = '1.0.2';

	public $font_registry = null;
	public $scripts       = null;
	public $api           = null;
	public $styles        = array();

	/**
	 * Access the single instance of this class
	 * @return Kirki
	 */
	public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new Kirki_Toolkit();
		}
		return self::$instance;
	}

	/**
	 * Shortcut method to get the translation strings
	 */
	public static function i18n() {

		$i18n = array(
			'background-color'      => __( 'Background Color', 'tm-polygon' ),
			'background-image'      => __( 'Background Image', 'tm-polygon' ),
			'no-repeat'             => __( 'No Repeat', 'tm-polygon' ),
			'repeat-all'            => __( 'Repeat All', 'tm-polygon' ),
			'repeat-x'              => __( 'Repeat Horizontally', 'tm-polygon' ),
			'repeat-y'              => __( 'Repeat Vertically', 'tm-polygon' ),
			'inherit'               => __( 'Inherit', 'tm-polygon' ),
			'background-repeat'     => __( 'Background Repeat', 'tm-polygon' ),
			'cover'                 => __( 'Cover', 'tm-polygon' ),
			'contain'               => __( 'Contain', 'tm-polygon' ),
			'background-size'       => __( 'Background Size', 'tm-polygon' ),
			'fixed'                 => __( 'Fixed', 'tm-polygon' ),
			'scroll'                => __( 'Scroll', 'tm-polygon' ),
			'background-attachment' => __( 'Background Attachment', 'tm-polygon' ),
			'left-top'              => __( 'Left Top', 'tm-polygon' ),
			'left-center'           => __( 'Left Center', 'tm-polygon' ),
			'left-bottom'           => __( 'Left Bottom', 'tm-polygon' ),
			'right-top'             => __( 'Right Top', 'tm-polygon' ),
			'right-center'          => __( 'Right Center', 'tm-polygon' ),
			'right-bottom'          => __( 'Right Bottom', 'tm-polygon' ),
			'center-top'            => __( 'Center Top', 'tm-polygon' ),
			'center-center'         => __( 'Center Center', 'tm-polygon' ),
			'center-bottom'         => __( 'Center Bottom', 'tm-polygon' ),
			'background-position'   => __( 'Background Position', 'tm-polygon' ),
			'background-opacity'    => __( 'Background Opacity', 'tm-polygon' ),
			'ON'                    => __( 'ON', 'tm-polygon' ),
			'OFF'                   => __( 'OFF', 'tm-polygon' ),
			'all'                   => __( 'All', 'tm-polygon' ),
			'cyrillic'              => __( 'Cyrillic', 'tm-polygon' ),
			'cyrillic-ext'          => __( 'Cyrillic Extended', 'tm-polygon' ),
			'devanagari'            => __( 'Devanagari', 'tm-polygon' ),
			'greek'                 => __( 'Greek', 'tm-polygon' ),
			'greek-ext'             => __( 'Greek Extended', 'tm-polygon' ),
			'khmer'                 => __( 'Khmer', 'tm-polygon' ),
			'latin'                 => __( 'Latin', 'tm-polygon' ),
			'latin-ext'             => __( 'Latin Extended', 'tm-polygon' ),
			'vietnamese'            => __( 'Vietnamese', 'tm-polygon' ),
			'serif'                 => _x( 'Serif', 'font style', 'tm-polygon' ),
			'sans-serif'            => _x( 'Sans Serif', 'font style', 'tm-polygon' ),
			'monospace'             => _x( 'Monospace', 'font style', 'tm-polygon' ),
		);

		$config = apply_filters( 'kirki/config', array() );

		if ( isset( $config['i18n'] ) ) {
			$i18n = wp_parse_args( $config['i18n'], $i18n );
		}

		return $i18n;

	}

	/**
	 * Shortcut method to get the font registry.
	 */
	public static function fonts() {
		return self::get_instance()->font_registry;
	}

	/**
	 * Constructor is private, should only be called by get_instance()
	 */
	private function __construct() {
	}

}
