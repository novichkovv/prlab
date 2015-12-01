<?php
/**
 * Site Background
 * =========
 */
$section  = 'background_image';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'site_bg_color',
	'label'     => esc_html__( 'Background color', 'tm-polygon' ),
	'help'      => esc_html__( 'Setup background color for your header', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#999',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'body.boxed',
		'property' => 'background-color',
	)
) );