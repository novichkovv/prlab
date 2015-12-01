<?php
/**
 * Footer Spacing
 * ============
 */
$section  = 'footer_spacing';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'footer_general_padding',
	'label'     => esc_html__( 'Padding', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '100px 0px 100px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-footer',
		'property' => 'padding',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'footer_general_margin',
	'label'     => esc_html__( 'Margin', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-footer',
		'property' => 'margin',
	)
) );
