<?php
/**
 * Nav General
 * ================
 */
$section  = 'nav';
$priority = 50;

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'toggle',
	'setting'     => 'nav_sticky_enable',
	'label'       => esc_html__( 'Sticky Menu', 'tm-polygon' ),
	'description' => esc_html__( 'Turn on this option if you want to enable sticky header on your site', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 0,
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'toggle',
	'setting'     => 'nav_boxed_enable',
	'label'       => esc_html__( 'Menu boxed', 'tm-polygon' ),
	'description' => esc_html__( 'Turn on this option if you want to enable menu boxed on your site', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 0,
) );