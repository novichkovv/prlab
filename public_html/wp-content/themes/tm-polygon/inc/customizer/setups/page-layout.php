<?php
/**
 * Page Layout
 * =========
 */
$section  = 'page_layout';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'radio-image',
	'setting'     => 'page_layout',
	'label'       => esc_html__( 'Page layout', 'tm-polygon' ),
	'description' => esc_html__( 'Choose the site layout you want', 'tm-polygon' ),
	'help'        => esc_html__( 'Choose the site layout you want', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'full-width',
	'choices'     => array(
		'full-width'      => TM_POLYGON_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );