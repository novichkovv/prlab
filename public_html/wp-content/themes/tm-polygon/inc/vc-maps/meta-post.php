<?php
vc_map( array(
	'name'     => esc_html__( 'Meta post', 'tm-polygon' ),
	'base'     => 'thememove_metapost',
	'category' => esc_html__( 'by THEMEMOVE', 'tm-polygon' ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Class', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'el_class',
		),
	)
) );