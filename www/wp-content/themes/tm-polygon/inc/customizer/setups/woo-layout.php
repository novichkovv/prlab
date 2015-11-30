<?php
/**
 * Woo Layout
 * ================
 */
$section  = 'woo_layout';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'radio-image',
	'setting'     => 'woo_layout_category',
	'label'       => esc_html__( 'Category Product Page Layout', 'tm-polygon' ),
	'description' => esc_html__( 'Choose the category product page layout you want', 'tm-polygon' ),
	'help'        => esc_html__( 'Choose the category product page layout you want', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'sidebar-content',
	'choices'     => array(
		'full-width'      => TM_POLYGON_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'radio-image',
	'setting'     => 'woo_layout_single_product',
	'label'       => esc_html__( 'Single Product Page Layout', 'tm-polygon' ),
	'description' => esc_html__( 'Choose the product page layout you want', 'tm-polygon' ),
	'help'        => esc_html__( 'Choose the product page layout you want', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'sidebar-content',
	'choices'     => array(
		'full-width'      => TM_POLYGON_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );