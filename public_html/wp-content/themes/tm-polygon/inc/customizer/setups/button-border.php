<?php
/**
 * Button Border
 * ============
 */
$section  = 'button_border';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'button_border_width',
	'label'     => esc_html__( 'Border width', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '2px 2px 2px 2px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'border-width',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'button_border_style',
	'label'     => esc_html__( 'Border style', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'solid',
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'tm-polygon' ),
		'dashed' => esc_html__( 'Dashed', 'tm-polygon' ),
		'dotted' => esc_html__( 'Dotted', 'tm-polygon' ),
		'double' => esc_html__( 'Double', 'tm-polygon' ),
	),
	'output'    => array(
		'element'  => '.btn, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'border-style',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'button_border_color',
	'label'       => esc_html__( 'Border color', 'tm-polygon' ),
	'description' => esc_html__( 'Border color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_POLYGON_PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'border-color',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'button_border_color_hover',
	'description' => esc_html__( 'Border color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_POLYGON_PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'    => array(
		'element'  => '.btn:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover',
		'property' => 'border-color',
	),
) );