<?php
/**
 * Page Layout
 * =========
 */
$section  = 'shop_layout';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'toggle',
	'setting'     => 'enable_shop_title',
	'label'       => esc_html__( 'Enable big title', 'tm-polygon' ),
	'description' => esc_html__( 'Enabling this option will display big title area', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'textarea',
	'setting'     => 'shop_heading',
	'label'       => esc_html__( 'Header text', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'CHECK OUT',
	'required'    => array(
		array(
			'setting'  => 'enable_shop_title',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'textarea',
	'setting'     => 'shop_description',
	'label'       => esc_html__( 'Header description', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => esc_html__( 'Work  is our favorite four letter word. It\'s also what defines us as a user-centered design company.', 'tm-polygon' ),
	'required'    => array(
		array(
			'setting'  => 'enable_shop_title',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );
