<?php
/**
 * Site Color
 * ================
 */
$section  = 'site_color';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'site_color_primary',
	'label'     => esc_html__( 'Primary color', 'tm-polygon' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TM_POLYGON_PRIMARY_COLOR,
	'transport' => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.pri-color',
			'property' => 'color',
		),
		array(
			'element'  => '.pri-bg',
			'property' => 'background-color',
		),
		array(
			'element'  => '.mini-cart .widget_shopping_cart_content, .search-box input[type="search"]',
			'property' => 'border-color',
		)
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_color_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'site_color_secondary',
	'label'     => esc_html__( 'Secondary color', 'tm-polygon' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TM_POLYGON_SECONDARY_COLOR,
	'transport' => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.second-color',
			'property' => 'color',
		),
		array(
			'element'  => '.second-bg',
			'property' => 'background-color',
		),
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_color_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'site_color_link',
	'label'       => esc_html__( 'Link setting', 'tm-polygon' ),
	'description' => esc_html__( 'Link color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#999',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => 'a,a:visited',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'site_color_link_hover',
	'description' => esc_html__( 'Link color on hover', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_POLYGON_PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => 'a:hover',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_color_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'site_color_bread_crumb_link',
	'label'       => esc_html__( 'Breadcrumb Link Color', 'tm-polygon' ),
	'description' => esc_html__( 'Link color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.tm_bread_crumb a, .tm_bread_crumb',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'site_color_bread_crumb_link_hover',
	'description' => esc_html__( 'Link color on hover', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.tm_bread_crumb a:hover',
		'property' => 'color',
	)
) );
