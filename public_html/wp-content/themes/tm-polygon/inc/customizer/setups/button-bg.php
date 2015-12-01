<?php
/**
 * Button Background
 * ============
 */
$section  = 'button_bg';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color-alpha',
	'setting'   => 'button_bg_color',
	'label'     => esc_html__( 'Background color', 'tm-polygon' ),
	'help'      => esc_html__( 'Setup background color for your button', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'rgba(255,255,255,0)',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'background',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color-alpha',
	'setting'   => 'button_bg_color_hover',
	'label'     => esc_html__( 'Background color on hover', 'tm-polygon' ),
	'help'      => esc_html__( 'Setup background color for your button', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TM_POLYGON_PRIMARY_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover',
		'property' => 'background',
	),
) );