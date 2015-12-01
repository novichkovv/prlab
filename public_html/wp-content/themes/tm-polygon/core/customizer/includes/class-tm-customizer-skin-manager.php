<?php
class TM_Customizer_Skin_Manager {
	protected static $skin_path;

	public function __construct() {
		self::$skin_path = get_template_directory() . '/inc/import/files/thememove01/skins/';

		add_action( 'wp_ajax_tm_customizer_select_skin', array( $this, 'select_skin' ) );

		add_action( 'init', array( $this, 'export_skin' ) );

		add_filter( 'tm_customizer_skins', array( $this, 'get_skins' ) );
		add_filter( 'tm_customizer_default_skin', array( $this, 'get_default_skin' ) );
	}

	public function get_skins() {
		$files = glob( self::$skin_path . '*.txt' );

		$skins = array();

		foreach ( (array) $files as $file ) {
			$name = basename( $file, '.txt' );
			$skins[ $name ] = $name;
		}

		$skins['Custom'] = 'Custom';

		return $skins;
	}

	public function get_skin_options( $skin ) {
		return $this->get_skin_options_from_file( $skin );
	}

	public function get_default_skin() {
		return 'Skin 1';
	}

	public function export_skin() {
		if ( isset( $_REQUEST['page'] ) && 'tm_customizer_export_skin' == $_REQUEST['page'] ) {
			$blogname  = strtolower( str_replace( ' ', '-', get_option( 'blogname' ) ) );
			$file_name = $blogname . '-thememove-' . date( 'Ydm' ) . '.txt';

			$options   = get_theme_mods();
			unset( $options['nav_menu_locations'] );

			header("Content-type: application/text",true,200);
			header("Content-Disposition: attachment; filename=$file_name");
			header("Pragma: no-cache");
			header("Expires: 0");

			echo infinity_base_encode(serialize($options));

			die();
		}
	}

	public function select_skin() {
		// Import skin
		$skin = $_REQUEST['skin'];

		$this->import_skin_from_file( self::$skin_path . $skin . '.txt' );

		wp_send_json_success();
		exit;
	}

	protected function import_skin_from_file( $file ) {
		$content = $this->get_file_contents( $file );

		$options = @unserialize( infinity_base_decode( $content ) );

		foreach ( (array) $options as $key => $val ) {
			set_theme_mod( $key, $val );
		}

		$mods = get_theme_mods();

		foreach ( $mods as $mod_key => $mod_valud ) {
			if ( 'nav_menu_locations' != $mod_key && ! isset( $options[ $mod_key ] ) ) {
				remove_theme_mod( $mod_key );
			}
		}
	}

	protected function get_skin_options_from_file( $skin ) {
		$content = $this->get_file_contents( self::$skin_path . $skin . '.txt' );

		$options = @unserialize( infinity_base_decode( $content ) );

		return is_array( $options ) ? $options : array();
	}

	protected function get_file_contents( $file ) {
		$content = '';
		if ( function_exists( 'realpath' ) ) {
			$file_path = realpath( $file );
		}
		if ( ! $file_path || ! is_file($file_path) ) {
			return '';
		}


		global $wp_filesystem;
		// Initialize the WP filesystem, no more using 'file-put-contents' function
		if ( empty( $wp_filesystem ) ) {
			require_once ( ABSPATH.'/wp-admin/includes/file.php' );
			WP_Filesystem();
		}

		return $wp_filesystem->get_contents( $file_path );
	}
}
