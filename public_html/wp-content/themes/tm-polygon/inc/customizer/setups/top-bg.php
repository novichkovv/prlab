<?php
/**
 * Top Area Background
 * ============
 */
$section  = 'top_bg';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color-alpha',
	'setting'   => 'top_bg_color',
	'label'     => esc_html__( 'Background color', 'tm-polygon' ),
	'help'      => esc_html__( 'Setup background color for your top', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#222222',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-top',
		'property' => 'background-color',
	),
	'required'  => array(
		array(
			'setting'  => 'header_type',
			'operator' => '!=',
			'value'    => 'header01',
		),
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );