<?php
/**
 * Copyright Style
 * ============
 */
$section  = 'copyright_style';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'copyright_style_text_color',
	'label'     => esc_html__( 'Text Color', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#999',
	'transport' => 'postMessage',
	'required'  => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
	'output'    => array(
		'element'  => '.copyright',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'copyright_style_link_color',
	'label'       => esc_html__( 'Link Color', 'tm-polygon' ),
	'description' => esc_html__( 'Link Color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
	'output'    => array(
		'element'  => '.copyright a',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'copyright_style_link_color_hover',
	'description' => esc_html__( 'Link color on hover', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_POLYGON_PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
	'output'    => array(
		'element'  => '.copyright a:hover',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color-alpha',
	'setting'   => 'copyright_bg_color',
	'label'     => esc_html__( 'Background color', 'tm-polygon' ),
	'help'      => esc_html__( 'Setup background color for your copyright', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#333',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.copyright',
		'property' => 'background-color',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'social_menu_style_font_size',
	'label'     => esc_html__( 'Font Size of Social menu', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 16,
	'choices'   => array(
		'min'  => 7,
		'max'  => 50,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.social-menu .menu li a:before',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );