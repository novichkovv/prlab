<?php
vc_map( array(
	'name'     => esc_html__( 'Recent Posts', 'tm-polygon' ),
	'base'     => 'thememove_recentposts',
	'category' => esc_html__( 'by THEMEMOVE', 'tm-polygon' ),
	'params'   => array(
		array(
			"type"       => 'dropdown',
			"heading"    => esc_html__( 'Type', 'tm-polygon' ),
			"param_name" => 'type',
			"value"      => array(
				__( "Type 1", 'tm-polygon' ) => 'content-type01',
				__( "Type 2", 'tm-polygon' ) => 'content-type02',
				__( "Type 3", 'tm-polygon' ) => 'content-type03',
			),
		),
		array(
			'type'       => 'checkbox',
			'param_name' => 'show_title',
			'value'      => array(
				__( 'Show title', 'tm-polygon' ) => true
			)
		),
		array(
			'type'       => 'checkbox',
			'param_name' => 'show_excerpt',
			'value'      => array(
				__( 'Show excerpt', 'tm-polygon' ) => true
			)
		),
		array(
			'type'       => 'checkbox',
			'param_name' => 'show_meta',
			'value'      => array(
				__( 'Show Meta', 'tm-polygon' ) => true
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Enter numbers of articles', 'tm-polygon' ),
			'param_name' => 'number',
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Class', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'el_class',
		),
	)
) );

