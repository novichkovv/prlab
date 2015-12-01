<?php
/**
 * Nav Background
 * ================
 */
$section  = 'nav_bg';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color-alpha',
	'setting'   => 'nav_bg_menu_background',
	'label'     => esc_html__( 'Main Background', 'tm-polygon' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TM_POLYGON_SECONDARY_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.main-navigation',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_menu_text_bg',
	'label'       => esc_html__( 'Link background', 'tm-polygon' ),
	'description' => esc_html__( 'Link background', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'rgba(255,255,255,0.2)',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '#site-navigation .menu > ul > li:after, #site-navigation .menu > li',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'nav_bg_sub_menu_text_bg',
	'label'       => esc_html__( 'Link background', 'tm-polygon' ),
	'description' => esc_html__( 'Link background', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#111111',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '#site-navigation .sub-menu li, #site-navigation .children li, #site-navigation .primary-menu .sub-menu, #site-navigation .menu .children',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_sub_menu_text_bg_hover',
	'description' => esc_html__( 'Link background on hover', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#111111',
	'output'      => array(
		'element'  => '#site-navigation .sub-menu li a:hover, #site-navigation .children li a:hover',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Mobile Menu</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_mobile_menu_bg',
	'description' => esc_html__( 'Mobile menu background', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'output'      => array(
		'element'  => '.site-header',
		'property' => 'background-color',
		'prefix'   => '@media ( max-width: 61.9375rem ) {',
		'suffix'   => '}',
	)
) );