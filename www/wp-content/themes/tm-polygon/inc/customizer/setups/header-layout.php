<?php
/**
 * Header Layout
 * ==============
 */
$section  = 'header_layout';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'select',
	'setting'     => 'header_type',
	'label'       => esc_html__( 'Header Type', 'tm-polygon' ),
	'description' => esc_html__( 'Choose the header type you want', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'header01',
	'choices'     => array(
		'header01' => 'Type 01',
		'header02' => 'Type 02',
		'header03' => 'Type 03',
		'header04' => 'Type 04',
		'header_blank' => 'Blank',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'toggle',
	'setting'     => 'header_layout_search_enable',
	'label'       => esc_html__( 'Search box', 'tm-polygon' ),
	'description' => esc_html__( 'Turn on this option if you want to enable search box on your site', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_field( 'tm-polygon', array(
		'type'        => 'toggle',
		'setting'     => 'header_layout_mini_cart_enable',
		'label'       => esc_html__( 'Mini Cart', 'tm-polygon' ),
		'description' => esc_html__( 'Turn on this option if you want to enable mini cart for header', 'tm-polygon' ),
		'section'     => $section,
		'priority'    => $priority ++,
		'default'     => 1,
	) );
}