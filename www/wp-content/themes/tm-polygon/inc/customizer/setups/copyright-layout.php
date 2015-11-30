<?php
/**
 * Copyright Layout
 * ============
 */
$section  = 'copyright_layout';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'toggle',
	'setting'     => 'copyright_layout_enable',
	'label'       => esc_html__( 'Copyright', 'tm-polygon' ),
	'description' => esc_html__( 'Enabling this option will display copyright area', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'toggle',
	'setting'     => 'copyright_social_menu_enable',
	'label'       => esc_html__( 'Social menu', 'tm-polygon' ),
	'description' => esc_html__( 'Enabling this option will display Social menu in copyright area', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'textarea',
	'setting'     => 'copyright_layout_text',
	'label'       => esc_html__( 'Left Text', 'tm-polygon' ),
	'description' => esc_html__( 'Entry the text for left block', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '&copy; Polygon Theme by ThemeMove. All Right Reserved 2015.',
	'transport'   => 'postMessage',
	'js_vars'     => array(
		'element'  => '.copyright .container',
		'function' => 'html',
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'select',
	'setting'  => 'copyright_layout_clear',
	'label'    => esc_html__( 'Clear', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'none',
	'choices'  => array(
		'none'  => __( 'None', 'tm-polygon' ),
		'left'  => __( 'Left', 'tm-polygon' ),
		'right' => __( 'Right', 'tm-polygon' ),
		'both'  => __( 'Both', 'tm-polygon' ),
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'copyright_general_padding',
	'label'     => esc_html__( 'Padding', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.copyright',
		'property' => 'padding',
	)
) );