<?php
/**
 * Page Background
 * =========
 */
$section  = 'page_bg';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'page_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color-alpha',
	'setting'   => 'page_bg_color',
	'label'     => esc_html__( 'Background color', 'tm-polygon' ),
	'help'      => esc_html__( 'Setup background color for your header', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'color-alpha',
	'setting'  => 'page_overlay_bg_color',
	'label'    => esc_html__( 'Overlay color', 'tm-polygon' ),
	'help'     => esc_html__( 'Setup overlay color for your header', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'rgba(238,238,238,0)',
	'output'   => array(
		'element'  => '.big-title:after',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'image',
	'setting'   => 'page_bg_image',
	'label'     => esc_html__( 'Background Image', 'tm-polygon' ),
	'help'      => esc_html__( 'Default background image for your header', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'http://polygon.thememove.com/data/images/section/bg-header.jpg',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title',
		'property' => 'background-image',
	)
) );