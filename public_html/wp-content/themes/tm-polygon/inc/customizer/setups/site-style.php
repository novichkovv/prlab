<?php
/**
 * Site Style
 * =========
 */
$section  = 'site_style';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'default'  => '<div class="group_title">Body</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'select2',
	'setting'  => 'site_style_body_font_family',
	'label'    => esc_html__( 'Font Family', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => TM_POLYGON_PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => 'body',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_body_font_weight',
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
		'element'  => 'body',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_body_font_size',
	'label'     => esc_html__( 'Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 14,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'body',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_body_letter_spacing',
	'label'     => esc_html__( 'Letter Spacing', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 0.06,
	'choices'   => array(
		'min'  => 0,
		'max'  => 1,
		'step' => 0.01,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'body',
		'property' => 'letter-spacing',
		'units'    => 'em',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'site_style_body_text',
	'label'     => esc_html__( 'Font Color', 'tm-polygon' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#999',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'body',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon' ),
	'default'  => '<div class="group_title">Heading</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'select2',
	'setting'  => 'site_style_heading_font_family',
	'label'    => esc_html__( 'Font Family', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => TM_POLYGON_PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => 'h1,h2,h3,h4,h5,h6',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_font_weight',
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
		'element'  => 'h1,h2,h3,h4,h5,h6',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_letter_spacing',
	'label'     => esc_html__( 'Letter Spacing', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 0.3,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => - 1,
		'max'  => 1,
		'step' => .05,
	),
	'output'    => array(
		'element'  => 'h1,h2,h3,h4,h5,h6',
		'property' => 'letter-spacing',
		'units'    => 'em',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'site_style_heading_font_color',
	'label'     => esc_html__( 'Font Color', 'tm-polygon' ),
	'help'      => esc_html__( 'This is some extra help text.', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#111',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h1, h2, h3, h4, h5, h6',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_style_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h1_font_size',
	'label'     => esc_html__( 'H1 Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 50,
	'choices'   => array(
		'min'  => 15,
		'max'  => 100,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h1',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h2_font_size',
	'label'     => esc_html__( 'H2 Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 32,
	'choices'   => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h2',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h3_font_size',
	'label'     => esc_html__( 'H3 Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 24,
	'choices'   => array(
		'min'  => 10,
		'max'  => 80,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h3',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h4_font_size',
	'label'     => esc_html__( 'H4 Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 18,
	'choices'   => array(
		'min'  => 10,
		'max'  => 70,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h4',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h5_font_size',
	'label'     => esc_html__( 'H5 Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 14,
	'choices'   => array(
		'min'  => 10,
		'max'  => 70,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h5',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h6_font_size',
	'label'     => esc_html__( 'H6 Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 12,
	'choices'   => array(
		'min'  => 10,
		'max'  => 70,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h6',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );