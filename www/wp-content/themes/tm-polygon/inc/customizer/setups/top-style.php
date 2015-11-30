<?php
/**
 * Top Area Style
 * ============
 */
$section  = 'top_style';
$priority = 1;

Kirki::add_field('tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'top_style_group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'help'     => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon'),
	'default'  => '<div class="group_title">Icon</div>',
));

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'top_style_icon_font_size',
	'label'     => esc_html__( 'Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 18,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-top .top-has-link *[class*="pe-7s"], .site-top .fa',
		'property' => 'font-size',
		'units'    => 'px',
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'top_style_icon_color',
	'description' => esc_html__( 'Icon color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#1573D1',
	'output'      => array(
		'element'  => '.site-top .top-has-link *[class*="pe-7s"], .site-top .fa',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field('tm-polygon', array(
  'type'     => 'custom',
  'setting'  => 'top_style_group_title_' . $priority++,
  'section'  => $section,
  'priority' => $priority++,
  'help'     => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm-polygon'),
  'default'  => '<div class="group_title">Text</div>',
));

Kirki::add_field('tm-polygon', array(
  'type'     => 'select2',
  'setting'  => 'top_style_font_family',
  'label'    => esc_html__('Font Family', 'tm-polygon'),
  'section'  => $section,
  'priority' => $priority++,
  'default'  => TM_POLYGON_PRIMARY_FONT,
  'choices'  => Kirki_Fonts::get_font_choices(),
  'output'   => array(
    'element'  => '.site-top',
    'property' => 'font-family',
  ),
));

Kirki::add_field('tm-polygon', array(
  'type'      => 'slider',
  'setting'   => 'top_style_font_size',
  'label'     => esc_html__('Font Size', 'tm-polygon'),
  'section'   => $section,
  'priority'  => $priority++,
  'default'   => 15,
  'choices'   => array(
    'min'  => 7,
    'max'  => 48,
    'step' => 1,
  ),
  'transport' => 'postMessage',
  'output'    => array(
    'element'  => '.site-top .top-has-link',
    'property' => 'font-size',
    'units'    => 'px',
  ),
));

Kirki::add_field('tm-polygon', array(
  'type'      => 'slider',
  'setting'   => 'top_style_font_weight',
  'label'     => esc_html__('Font Weight', 'tm-polygon'),
  'section'   => $section,
  'priority'  => $priority++,
  'default'   => 400,
  'transport' => 'postMessage',
  'choices'   => array(
    'min'  => 100,
    'max'  => 900,
    'step' => 100,
  ),
  'output'    => array(
    'element'  => '.site-top .top-has-link',
    'property' => 'font-weight',
  ),
));

Kirki::add_field('tm-polygon', array(
  'type'      => 'color',
  'setting'   => 'top_style_font_color',
  'label'     => esc_html__('Font Color', 'tm-polygon'),
  'section'   => $section,
  'priority'  => $priority++,
  'default'   => '#999',
  'transport' => 'postMessage',
  'output'    => array(
    'element'  => '.site-top .top-has-link',
    'property' => 'color',
  ),
));

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'top_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Link</div>',
	'required' => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'select2',
	'setting'  => 'top_style_link_font_family',
	'label'    => esc_html__( 'Font Family', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => TM_POLYGON_PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.site-top .top-has-link a',
		'property' => 'font-family',
	),
	'required' => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'top_style_link_font_size',
	'label'     => esc_html__( 'Font Size', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 16,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-top .top-has-link a',
		'property' => 'font-size',
		'units'    => 'px',
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'top_style_link_font_weight',
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
		'element'  => '.site-top .top-has-link a',
		'property' => 'font-weight',
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'top_style_link_font_color',
	'label'       => esc_html__( 'Link Color', 'tm-polygon' ),
	'description' => esc_html__( 'Link Color', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.site-top .top-has-link a',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'top_style_link_font_color_hover',
	'description' => esc_html__( 'Link color on hover', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_POLYGON_PRIMARY_COLOR,
	'output'      => array(
		'element'  => '.site-top .top-has-link a:hover',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );
