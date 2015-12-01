<?php
vc_map( array(
	'name'     => esc_html__( 'Button', 'tm-polygon' ),
	'base'     => 'thememove_button',
	'category' => esc_html__( 'by THEMEMOVE', 'tm-polygon' ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Text', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'text',
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Url', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'url',
			'description' => esc_html__( 'Entry your url here', 'tm-polygon' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Icon', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'icon',
			'description' => esc_html__( 'Example: fa-arrow-right', 'tm-polygon' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Class', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'el_class',
		),
	)
) );