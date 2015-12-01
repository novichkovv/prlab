<?php
/**
 * Top Area Spacing
 * ============
 */
$section  = 'top_spacing';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'top_general_padding',
	'label'     => esc_html__( 'Padding', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '19px 0px 19px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-top',
		'property' => 'padding',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'top_general_margin',
	'label'     => esc_html__( 'Margin', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-top',
		'property' => 'margin',
	)
) );