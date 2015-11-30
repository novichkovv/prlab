<?php
/**
 * Button Style
 * ============
 */
$section  = 'button_style';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'select2',
	'setting'  => 'button_style_font_family',
	'label'    => esc_html__( 'Font Family', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => TM_POLYGON_PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.btn, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'button_style_font_size',
	'label'     => esc_html__( 'Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 12,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'button_style_font_weight',
	'label'     => esc_html__( 'Font Weight', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 900,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.btn, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'font-weight',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'button_style_link_color',
	'label'       => esc_html__( 'Link Color', 'tm-polygon' ),
	'description' => esc_html__( 'Link Color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_POLYGON_PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'    => array(
		'element'  => '.btn, a.btn:visited, button, input[type=submit], input[type=reset], input[type=button]',
		'property' => 'color',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'button_style_link_color_hover',
	'description' => esc_html__( 'Link Color on hover', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_POLYGON_SECONDARY_COLOR,
	'output'    => array(
		'element'  => '.btn:hover, a.btn:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover',
		'property' => 'color',
	),
) );