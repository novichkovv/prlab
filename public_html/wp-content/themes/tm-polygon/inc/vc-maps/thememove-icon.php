<?php
require_once get_template_directory() . '/inc/fontlibs/pe7stroke.php';

vc_map( array(
	'name'        => esc_html__( 'Themmove Icon', 'tm-polygon' ),
	'base'        => 'thememove_icon',
	'category'    => esc_html__( 'by THEMEMOVE', 'tm-polygon' ),
	'description' => esc_html__( 'Eye catching icons from libraries', 'tm-polygon' ),
	'params'      => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon library', 'tm-polygon' ),
			'value'       => array(
				esc_html__( 'Font Awesome', 'tm-polygon' ) => 'fontawesome',
				esc_html__( 'Open Iconic', 'tm-polygon' )  => 'openiconic',
				esc_html__( 'Typicons', 'tm-polygon' )     => 'typicons',
				esc_html__( 'Entypo', 'tm-polygon' )       => 'entypo',
				esc_html__( 'Linecons', 'tm-polygon' )     => 'linecons',
				esc_html__( 'P7 Stroke', 'tm-polygon' )    => 'pe7stroke',
			),
			'admin_label' => true,
			'param_name'  => 'type',
			'description' => esc_html__( 'Select icon library.', 'tm-polygon' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-polygon' ),
			'param_name'  => 'icon_fontawesome',
			'value'       => 'fa fa-adjust', // default value to backend editor admin_label
			'settings'    => array(
				'emptyIcon'    => false,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'fontawesome',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-polygon' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-polygon' ),
			'param_name'  => 'icon_openiconic',
			'value'       => 'vc-oi vc-oi-dial', // default value to backend editor admin_label
			'settings'    => array(
				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
				'type'         => 'openiconic',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'openiconic',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-polygon' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-polygon' ),
			'param_name'  => 'icon_typicons',
			'value'       => 'typcn typcn-adjust-brightness', // default value to backend editor admin_label
			'settings'    => array(
				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
				'type'         => 'typicons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'typicons',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-polygon' ),
		),
		array(
			'type'       => 'iconpicker',
			'heading'    => esc_html__( 'Icon', 'tm-polygon' ),
			'param_name' => 'icon_entypo',
			'value'      => 'entypo-icon entypo-icon-note', // default value to backend editor admin_label
			'settings'   => array(
				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
				'type'         => 'entypo',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value'   => 'entypo',
			),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-polygon' ),
			'param_name'  => 'icon_linecons',
			'value'       => 'vc_li vc_li-heart', // default value to backend editor admin_label
			'settings'    => array(
				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
				'type'         => 'linecons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'linecons',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-polygon' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'tm-polygon' ),
			'param_name'  => 'icon_pe7stroke',
			'value'       => 'pe-7s-album',
			'settings'    => array(
				'emptyIcon'    => false,
				'type'         => 'pe7stroke',
				'iconsPerPage' => 400,
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'pe7stroke',
			),
			'description' => esc_html__( 'Select icon from library.', 'tm-polygon' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => "Size",
			'admin_label' => true,
			'param_name'  => 'size',
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Custom color', 'tm-polygon' ),
			'param_name'  => 'custom_color',
			'description' => esc_html__( 'Select custom icon color.', 'tm-polygon' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Background shape', 'tm-polygon' ),
			'param_name'  => 'background_style',
			'value'       => array(
				esc_html__( 'None', 'tm-polygon' )            => '',
				esc_html__( 'Circle', 'tm-polygon' )          => 'rounded',
				esc_html__( 'Square', 'tm-polygon' )          => 'boxed',
				esc_html__( 'Rounded', 'tm-polygon' )         => 'rounded-less',
				esc_html__( 'Outline Circle', 'tm-polygon' )  => 'rounded-outline',
				esc_html__( 'Outline Square', 'tm-polygon' )  => 'boxed-outline',
				esc_html__( 'Outline Rounded', 'tm-polygon' ) => 'rounded-less-outline',
			),
			'description' => esc_html__( 'Select background shape and style for icon.', 'tm-polygon' )
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Custom background color', 'tm-polygon' ),
			'param_name'  => 'custom_background_color',
			'description' => esc_html__( 'Select custom icon background color.', 'tm-polygon' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon alignment', 'tm-polygon' ),
			'param_name'  => 'align',
			'value'       => array(
				esc_html__( 'Left', 'tm-polygon' )   => 'left',
				esc_html__( 'Right', 'tm-polygon' )  => 'right',
				esc_html__( 'Center', 'tm-polygon' ) => 'center',
			),
			'description' => esc_html__( 'Select icon alignment.', 'tm-polygon' ),
		),
		array(
			'type'        => 'vc_link',
			'heading'     => esc_html__( 'URL (Link)', 'tm-polygon' ),
			'param_name'  => 'link',
			'description' => esc_html__( 'Add link to icon.', 'tm-polygon' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'tm-polygon' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'tm-polygon' )
		),

	),
	'js_view'     => 'VcIconElementView_Backend',
) );
