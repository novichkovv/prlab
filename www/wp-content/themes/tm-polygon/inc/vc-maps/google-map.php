<?php
vc_map( array(
	'name'     => esc_html__( 'Google Maps', 'tm-polygon' ),
	'base'     => 'thememove_gmaps',
	'category' => esc_html__( 'by THEMEMOVE', 'tm-polygon' ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Address or Coordinate', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'address',
			'value'       => '40.7590615,-73.969231',
			'description' => esc_html__( 'Enter address or coordinate.', 'tm-polygon' ),
		),
		array(
			'type'        => 'attach_image',
			'heading'     => esc_html__( 'Marker icon', 'tm-polygon' ),
			'param_name'  => 'marker_icon',
			'description' => esc_html__( 'Choose a image for marker address', 'tm-polygon' ),
		),
		array(
			'type'        => 'textarea_html',
			'heading'     => esc_html__( 'Marker Information', 'tm-polygon' ),
			'param_name'  => 'content',
			'description' => esc_html__( 'Content for info window', 'tm-polygon' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Height', 'tm-polygon' ),
			'param_name'  => 'map_height',
			'value'       => '480',
			'description' => esc_html__( 'Enter map height (in pixels or percentage)', 'tm-polygon' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Width', 'tm-polygon' ),
			'param_name'  => 'map_width',
			'value'       => '100%',
			'description' => esc_html__( 'Enter map width (in pixels or percentage)', 'tm-polygon' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Zoom level', 'tm-polygon' ),
			'param_name'  => 'zoom',
			'value'       => '16',
			'description' => esc_html__( 'Map zoom level', 'tm-polygon' ),
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html__( 'Enable Map zoom', 'tm-polygon' ),
			'param_name' => 'zoom_enable',
			'value'      => array(
				__( 'Enable', 'tm-polygon' ) => 'enable'
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Map type', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'map_type',
			'description' => esc_html__( 'Choose a map type', 'tm-polygon' ),
			'value'       => array(
				__( 'Roadmap', 'tm-polygon' )   => 'roadmap',
				__( 'Satellite', 'tm-polygon' ) => 'satellite',
				__( 'Hybrid', 'tm-polygon' )    => 'hybrid',
				__( 'Terrain', 'tm-polygon' )   => 'terrain',
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Map style', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'map_style',
			'description' => esc_html__( 'Choose a map style. This approach changes the style of the Roadmap types (base imagery in terrain and satellite views is not affected, but roads, labels, etc. respect styling rules', 'tm-polygon' ),
			'value'       => array(
				__( 'Default', 'tm-polygon' )          => 'default',
				__( 'Grayscale', 'tm-polygon' )        => 'style1',
				__( 'Subtle Grayscale', 'tm-polygon' ) => 'style2',
				__( 'Apple Maps-esque', 'tm-polygon' ) => 'style3',
				__( 'Pale Dawn', 'tm-polygon' )        => 'style4',
				__( 'Muted Blue', 'tm-polygon' )       => 'style5',
				__( 'Paper', 'tm-polygon' )            => 'style6',
				__( 'Light Dream', 'tm-polygon' )      => 'style7',
				__( 'Retro', 'tm-polygon' )            => 'style8',
				__( 'Avocado World', 'tm-polygon' )    => 'style9',
				__( 'Facebook', 'tm-polygon' )         => 'style10',
				__( 'Custom', 'tm-polygon' )           => 'custom'
			)
		),
		array(
			'type'       => 'textarea_raw_html',
			'heading'    => esc_html__( 'Map style snippet', 'tm-polygon' ),
			'param_name' => 'map_style_snippet',
			'dependency' => array(
				'element' => 'map_style',
				'value'   => 'custom',
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'tm-polygon' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you want to use multiple Google Maps in one page, please add a class name for them.', 'tm-polygon' ),
		),
	)
) );