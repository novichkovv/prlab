<?php
/**
 * Nav Border
 * ================
 */
$section  = 'nav_border';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'nav_border_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Boder width', 'tm-polygon' ),
	'setting'   => 'nav_border_menu_text_border_with',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'      => array(
		'element'  => '#site-navigation #primary-menu > li',
		'property' => 'border-width',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'nav_border_style',
	'label'     => esc_html__( 'Border style', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'solid',
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'tm-polygon' ),
		'dashed' => esc_html__( 'Dashed', 'tm-polygon' ),
		'dotted' => esc_html__( 'Dotted', 'tm-polygon' ),
		'double' => esc_html__( 'Double', 'tm-polygon' ),
	),
	'output'      => array(
		'element'  => '#site-navigation #primary-menu > li',
		'property' => 'border-style',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'nav_border_menu_text_border_color',
	'label'       => esc_html__( 'Color', 'tm-polygon' ),
	'description' => esc_html__( 'Border color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#999',
	'output'      => array(
		'element'  => '#site-navigation #primary-menu > li',
		'property' => 'border-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'nav_border_menu_text_border_color_hover',
	'description' => esc_html__( 'Border color on hover', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#999',
	'output'      => array(
		'element'  => '#site-navigation #primary-menu > li:hover',
		'property' => 'border-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'nav_border_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Border width for first item', 'tm-polygon' ),
	'setting'   => 'nav_border_sub_menu_text_border_width_first',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0 0 0px 0',
	'transport' => 'postMessage',
	'output'      => array(
		'element'  => '#site-navigation #primary-menu li .sub-menu li:first-child a',
		'property' => 'border-width',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Border width', 'tm-polygon' ),
	'setting'   => 'nav_border_sub_menu_text_border_with',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '1px 0 0px 0',
	'transport' => 'postMessage',
	'output'      => array(
		'element'  => '#site-navigation #primary-menu li .sub-menu li a',
		'property' => 'border-width',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'nav_border_sub_menu_style',
	'label'     => esc_html__( 'Border style', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'solid',
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'tm-polygon' ),
		'dashed' => esc_html__( 'Dashed', 'tm-polygon' ),
		'dotted' => esc_html__( 'Dotted', 'tm-polygon' ),
		'double' => esc_html__( 'Double', 'tm-polygon' ),
	),
	'output'      => array(
		'element'  => '#site-navigation #primary-menu li .sub-menu li a',
		'property' => 'border-style',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_style_sub_menu_text_border_color',
	'label'       => esc_html__( 'Color', 'tm-polygon' ),
	'description' => esc_html__( 'Border color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'rgba(255,255,255,0.05)',
	'output'      => array(
		'element'  => '#site-navigation #primary-menu li .sub-menu li a',
		'property' => 'border-color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_style_sub_menu_text_border_color_hover',
	'description' => esc_html__( 'Border color on hover', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'rgba(255,255,255,0.05)',
	'output'      => array(
		'element'  => '#site-navigation #primary-menu li .sub-menu li a:hover',
		'property' => 'border-color',
	)
) );