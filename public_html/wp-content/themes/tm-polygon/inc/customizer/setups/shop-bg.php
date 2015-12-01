<?php
/**
 * Page Background
 * =========
 */
$section  = 'shop_bg';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'shop_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'shop_bg_color',
	'label'     => esc_html__( 'Background color', 'tm-polygon' ),
	'help'      => esc_html__( 'Setup background color for your header', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.shop-title.big-title',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'image',
	'setting'   => 'shop_bg_image',
	'label'     => esc_html__( 'Background Image', 'tm-polygon' ),
	'help'      => esc_html__( 'Default background image for your header', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'http://polygon.thememove.com/data/images/section/bg-header-shop.jpg',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.shop-title.big-title',
		'property' => 'background-image',
	)
) );