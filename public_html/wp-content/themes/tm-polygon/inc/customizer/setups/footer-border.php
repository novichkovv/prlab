<?php
/**
 * Footer Border
 * ============
 */
$section  = 'footer_border';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'footer_border_width',
	'label'     => esc_html__( 'Border width', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'footer_border_style',
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
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'footer_border_color',
	'label'     => esc_html__( 'Border color', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'header_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">List</div>',
) );
Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'list_border_color',
	'label'     => esc_html__( 'Border color', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#333',
	'transport' => 'postMessage',
    'output'      => array(
		'element'  => '.site-footer .widget.widget_recent_entries ul li, .site-footer .widget.widget_recent_entries ul li:first-child',
		'property' => 'border-color',
	)
) );