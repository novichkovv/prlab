<?php
/**
 * Site Layout
 * ================
 */
$section  = 'site_layouts';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_layouts_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'radio-image',
	'setting'     => 'site_layout',
	'label'       => esc_html__( 'Site layout', 'tm-polygon' ),
	'description' => esc_html__( 'Choose the site layout you want', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => TM_POLYGON_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_layouts_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'radio-image',
	'setting'     => 'archive_layout',
	'label'       => esc_html__( 'Archive layout', 'tm-polygon' ),
	'description' => esc_html__( 'Choose the archive layout you want', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => TM_POLYGON_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_layouts_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'radio-image',
	'setting'     => 'search_layout',
	'label'       => esc_html__( 'Search layout', 'tm-polygon' ),
	'description' => esc_html__( 'Choose the search layout you want', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => TM_POLYGON_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TM_POLYGON_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );