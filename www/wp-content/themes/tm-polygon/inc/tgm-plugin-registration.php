<?php
if ( ! function_exists( 'tm_polygon_register_theme_plugins' ) ) :
	function tm_polygon_register_theme_plugins() {

		$plugins = array(
			array(
				'name'               => 'ThemeMove Core',
				'slug'               => 'thememove-core',
				'source'             => get_stylesheet_directory() . '/plugins/thememove-core.zip',
				'version'            => '1.2.5',
				'required'           => true,
				'force_activation'   => true,
				'force_deactivation' => true,
			),
			array(
				'name'               => 'Visual Composer',
				'slug'               => 'js_composer',
				'source'             => get_stylesheet_directory() . '/plugins/js_composer.zip',
				'version'            => '4.8.1',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false,
			),
			array(
				'name'               => 'Essential Grid',
				'slug'               => 'essential-grid',
				'source'             => get_stylesheet_directory() . '/plugins/essential-grid.zip',
				'version'            => '2.0.9.1',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false,
			),
			array(
				'name'               => 'Revolution Slider',
				'slug'               => 'revslider',
				'source'             => get_stylesheet_directory() . '/plugins/revslider.zip',
				'version'            => '5.1.3',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false,
			),
			array(
				'name'               => 'Templatera',
				'slug'               => 'templatera',
				'source'             => get_stylesheet_directory() . '/plugins/templatera.zip',
				'version'            => '1.1.4',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false,
			),
			array(
				'name'               => 'Vafpress Post Formats UI',
				'slug'               => 'vafpress-post-formats-ui-develop',
				'source'             => get_stylesheet_directory() . '/plugins/vafpress-post-formats-ui-develop.zip',
				'required'           => true,
				'version'            => '1.5',
				'force_activation'   => false,
				'force_deactivation' => false,
			),
			array(
				'name'     => 'Testimonials by WooThemes',
				'slug'     => 'testimonials-by-woothemes',
				'required' => false,
			),
			array(
				'name'     => 'WooCommerce',
				'slug'     => 'woocommerce',
				'required' => false,
			),
			array(
				'name'     => 'Widget Logic',
				'slug'     => 'widget-logic',
				'required' => false,
			),
			array(
				'name'     => 'Loco Translate',
				'slug'     => 'loco-translate',
				'required' => false,
			),
			array(
				'name'     => 'Contact Form 7',
				'slug'     => 'contact-form-7',
				'required' => false,
			),
			array(
				'name'     => 'MailChimp',
				'slug'     => 'mailchimp-for-wp',
				'required' => false,
			),
			array(
				'name'     => 'Projects',
				'slug'     => 'projects-by-woothemes',
				'required' => false,
			),
		);

		$config = array(
			'id'           => 'tgmpa',
			// Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',
			// Default absolute path to pre-packaged plugins.
			'menu'         => 'tgmpa-install-plugins',
			// Menu slug.
			'parent_slug'  => 'themes.php',
			// Parent menu slug.
			'capability'   => 'edit_theme_options',
			// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,
			// Show admin notices or not.
			'dismissable'  => true,
			// If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',
			// If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => true,
			// Automatically activate plugins after installation or not.
			'message'      => '',
			// Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'tm-polygon' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'tm-polygon' ),
				'installing'                      => __( 'Installing Plugin: %s', 'tm-polygon' ),
				// %s = plugin name.
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'tm-polygon' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %1$s plugin.', 'Sorry, but you do not have the correct permissions to install the %1$s plugins.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'notice_ask_to_update_maybe'      => _n_noop( 'There is an update available for: %1$s.', 'There are updates available for the following plugins: %1$s.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %1$s plugin.', 'Sorry, but you do not have the correct permissions to update the %1$s plugins.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %1$s plugin.', 'Sorry, but you do not have the correct permissions to activate the %1$s plugins.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'tm-polygon' ),
				'update_link'                     => _n_noop( 'Begin updating plugin', 'Begin updating plugins', 'tm-polygon' ),
				'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'tm-polygon' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'tm-polygon' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'tm-polygon' ),
				'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'tm-polygon' ),
				'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'tm-polygon' ),
				// %1$s = plugin name(s).
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'tm-polygon' ),
				// %s = dashboard link.
				'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'tm-polygon' ),
				'nag_type'                        => 'updated',
				// Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			)
		);

		tgmpa( $plugins, $config );

	}

	add_action( 'tgmpa_register', 'tm_polygon_register_theme_plugins' );
endif;