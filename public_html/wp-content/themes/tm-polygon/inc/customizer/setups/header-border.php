<?php
/**
 * Header Border
 * ============
 */
$section  = 'header_border';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'header_border_width',
	'label'     => esc_html__( 'Border width', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'      => array(
		'element'  => '.site-header',
		'property' => 'border-width',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'header_border_style',
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
	'output'      => array(
		'element'  => '.site-header',
		'property' => 'border-style',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color-alpha',
	'setting'   => 'header_border_color',
	'label'     => esc_html__( 'Border color', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'postMessage',
	'output'      => array(
		'element'  => '.site-header',
		'property' => 'border-color',
	)
) );