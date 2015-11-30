<?php
/**
 * Custom JS
 * ===================
 */
$section  = 'custom_js';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'checkbox',
	'setting'  => 'custom_js_enable',
	'label'    => esc_html__( 'Enable custom JS', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 1,
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'textarea',
	'setting'  => 'custom_js',
	'label'    => esc_html__( 'Custom JS', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '',
	'required' => array(
		array(
			'setting'  => 'custom_js_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );