<?php
/**
 * Footer Background
 * ============
 */
$section  = 'footer_bg';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color-alpha',
	'setting'   => 'footer_bg_color',
	'label'     => esc_html__( 'Background color', 'tm-polygon' ),
	'help'      => esc_html__( 'Setup background color for your footer', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#222',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-footer',
		'property' => 'background-color',
	)
) );