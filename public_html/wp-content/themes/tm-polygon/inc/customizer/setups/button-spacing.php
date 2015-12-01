<?php
/**
 * Header Spacing
 * ============
 */
$section  = 'button_spacing';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'button_padding',
	'label'     => esc_html__( 'Padding', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '13px 35px 13px 35px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'padding',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'button_margin',
	'label'     => esc_html__( 'Margin', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 10px 10px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'margin',
	),
) );