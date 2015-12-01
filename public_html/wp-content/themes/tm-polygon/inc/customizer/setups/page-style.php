<?php
/**
 * Page Style
 * =========
 */
$section  = 'page_style';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'page_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'select2',
	'setting'  => 'page_style_heading_font_family',
	'label'    => esc_html__( 'Font Family', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => TM_POLYGON_PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.big-title .entry-title',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'page_style_heading_font_weight',
	'label'     => esc_html__( 'Font Weight', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 400,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'page_style_heading_letter_spacing',
	'label'     => esc_html__( 'Letter Spacing', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 0.3,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => - 1,
		'max'  => 1,
		'step' => .3,
	),
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'letter-spacing',
		'units'    => 'em',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'page_style_heading_font_color',
	'label'     => esc_html__( 'Font Color', 'tm-polygon' ),
	'help'      => esc_html__( 'This is some extra help text.', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'page_style_heading_font_size',
	'label'     => esc_html__( 'Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 24,
	'choices'   => array(
		'min'  => 15,
		'max'  => 100,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );