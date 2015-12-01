<?php
/**
 * Header Spacing
 * ============
 */
$section  = 'header_spacing';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'header_spacing_padding',
	'label'     => esc_html__( 'Padding', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'header_spacing_margin',
	'label'     => esc_html__( 'Margin', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
) );