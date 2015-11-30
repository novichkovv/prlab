<?php
/**
 * Woo Color
 * ================
 */
$section  = 'woo_color';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'woo_color_primary',
	'label'     => esc_html__( 'Primary color', 'tm-polygon' ),
	'help'      => esc_html__( 'Action buttons/price slider/layered nav UI', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TM_POLYGON_PRIMARY_COLOR,
	'transport' => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'woo_color_secondary',
	'label'     => esc_html__( 'Secondary color', 'tm-polygon' ),
	'help'      => esc_html__( 'Buttons and tabs', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TM_POLYGON_SECONDARY_COLOR,
	'transport' => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'woo_color_high_light',
	'label'     => esc_html__( 'High Light Color', 'tm-polygon' ),
	'help'      => esc_html__( 'Price labels and sale flashes', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'woo_color_content_bg',
	'label'     => esc_html__( 'Content Background Color', 'tm-polygon' ),
	'help'      => esc_html__( 'Your themes page background - used for tab active states', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'color',
	'setting'   => 'woo_color_subtext',
	'label'     => esc_html__( 'Subtext Color', 'tm-polygon' ),
	'help'      => esc_html__( 'Used for certain text and asides - breadcrumbs, small text etc', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'woo_button_color',
	'label'       => esc_html__( 'Button Color', 'tm-polygon' ),
	'description' => esc_html__( 'Color for button', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#111',
	'transport'   => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'woo_button_color_hover',
	'description' => esc_html__( 'Hover color for button', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'woo_button_bg_color',
	'label'       => esc_html__( 'Button Background Color', 'tm-polygon' ),
	'description' => esc_html__( 'Color for button', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#dddddd',
	'transport'   => 'postMessage',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'color',
	'setting'     => 'woo_button_bg_color_hover',
	'description' => esc_html__( 'Hover background color for button', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_POLYGON_PRIMARY_COLOR,
	'transport'   => 'postMessage',
) );