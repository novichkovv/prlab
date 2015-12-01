<?php
/**
 * Header Style
 * ============
 */
$section  = 'header_style';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'header_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Header</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'select2',
	'setting'  => 'header_style_font_family',
	'label'    => esc_html__( 'Font Family', 'tm-polygon' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => TM_POLYGON_PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.site-header',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'header_style_font_size',
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
		'element'  => '.site-header',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'slider',
	'setting'   => 'header_style_font_weight',
	'label'     => esc_html__( 'Font Weight', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 300,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'header_style_font_color',
	'label'     => esc_html__( 'Font Color', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#111',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-header,.extra-info h3',
		'property' => 'color',
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'header_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Search icon</div>',
	'required' => array(
		array(
			'setting'  => 'header_layout_search_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'header_style_search_text_color',
	'label'     => esc_html__( 'Search Icon Color', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#111',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.search-box i:before, .search-box i:after',
		'property' => 'color',
	),
	'required' => array(
		array(
			'setting'  => 'header_layout_search_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_field( 'tm-polygon', array(
		'type'     => 'custom',
		'setting'  => 'header_style_group_title_' . $priority ++,
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => '<div class="group_title">Mini Cart</div>',
		'required' => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'tm-polygon', array(
		'type'      => 'color',
		'setting'   => 'header_style_minicart_text_color',
		'label'     => esc_html__( 'Cart Icon Color', 'tm-polygon' ),
		'section'   => $section,
		'priority'  => $priority ++,
		'default'   => '#111',
		'transport' => 'postMessage',
		'output'    => array(
			'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:before, .title-cart',
			'property' => 'color',
		),
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		),
	) );

	Kirki::add_field( 'tm-polygon', array(
		'type'      => 'color',
		'setting'   => 'header_style_minicart_number_color',
		'label'     => esc_html__( 'Cart Number Color', 'tm-polygon' ),
		'section'   => $section,
		'priority'  => $priority ++,
		'default'   => '#fff',
		'transport' => 'postMessage',
		'output'    => array(
			'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:after',
			'property' => 'color',
		),
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'tm-polygon', array(
		'type'        => 'toggle',
		'setting'     => 'header_mini_cart_pull_right_enable',
		'label'       => esc_html__( 'Mini cart pull right', 'tm-polygon' ),
		'section'     => $section,
		'priority'    => $priority ++,
		'default'     => 0,
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		),
	) );

	Kirki::add_field( 'tm-polygon', array(
		'type'      => 'color-alpha',
		'setting'   => 'header_style_minicart_background',
		'label'     => esc_html__( 'Cart Background Color', 'tm-polygon' ),
		'section'   => $section,
		'priority'  => $priority ++,
		'default'   => 'rgba(255,255,255,0)',
		'transport' => 'postMessage',
		'output'    => array(
			'element'  => '.search-cart .mini-cart',
			'property' => 'background',
		),
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

}