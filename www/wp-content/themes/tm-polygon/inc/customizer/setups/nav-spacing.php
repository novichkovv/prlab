<?php
/**
 * Nav Spacing
 * ===========
 */
$section  = 'nav_spacing';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Menu margin', 'tm-polygon' ),
	'setting'   => 'nav_spacing_menu_margin',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#site-navigation .primary-menu',
		'property' => 'margin',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'tm-polygon' ),
	'setting'   => 'nav_spacing_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '42px 19px 42px 19px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#site-navigation .menu > ul > li > a, #site-navigation .menu > li > a, .search-cart',
		'property' => 'padding',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Sub menu padding', 'tm-polygon' ),
	'setting'   => 'nav_spacing_sub_menu_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '20px 30px 20px 30px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#site-navigation .primary-menu .sub-menu, #site-navigation .menu .children',
		'property' => 'padding',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'tm-polygon' ),
	'setting'   => 'nav_spacing_sub_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '13px 0px 13px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#site-navigation .sub-menu li a, #site-navigation .children li a',
		'property' => 'padding',
	)
) );