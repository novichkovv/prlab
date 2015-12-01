<?php
/**
 * Custom CSS
 * ==========
 */
$section  = 'custom_css';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'checkbox',
	'setting'  => 'custom_css_enable',
	'label'    => esc_html__( 'Enable custom css', 'tm-polygon' ),
	'section'  => $section,
	'default'  => 1,
	'priority' => $priority ++,
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'textarea',
	'setting'   => 'custom_css',
	'label'     => esc_html__( 'Custom CSS', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'postMessage',
	'default'   => '',
	'js_vars'   => array(
		'element'  => '#tm-polygon-main-inline-css',
		'function' => 'html',
	),
	'required'  => array(
		array(
			'setting'  => 'custom_css_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );