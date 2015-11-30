<?php
/**
 * Site General
 * ================
 */
$section  = 'site_general';
$priority = 3;

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'select',
	'setting'   => 'skin',
	'label'     => esc_html__( 'Skin', 'tm-polygon' ),
	'section'   => $section,
	'choices'   => apply_filters( 'tm_customizer_skins', array() ),
	'priority'  => 1,
	'default'   => apply_filters( 'tm_customizer_default_skin', '' ),
	'transport' => 'postMessage'
) );

if ( function_exists( 'tm_bread_crumb' ) ) {
	Kirki::add_field( 'tm-polygon', array(
		'type'     => 'custom',
		'setting'  => 'site_general_group_title_' . $priority ++,
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => '<div class="group_title">Breadcrumb</div>',
	) );

	Kirki::add_field( 'tm-polygon', array(
		'type'        => 'toggle',
		'setting'     => 'site_general_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb', 'tm-polygon' ),
		'description' => esc_html__( 'Enabling this option will display breadcrumb on every page', 'tm-polygon' ),
		'section'     => $section,
		'priority'    => $priority ++,
		'default'     => 1,
	) );

	Kirki::add_field( 'tm-polygon', array(
		'type'     => 'custom',
		'setting'  => 'site_general_hr_' . $priority ++,
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => '<hr />',
		'required' => array(
			array(
				'setting'  => 'site_general_breadcrumb_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'tm-polygon', array(
		'type'     => 'text',
		'setting'  => 'site_general_breadcrumb_home_text',
		'label'    => esc_html__( '"Home" text', 'tm-polygon' ),
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => 'Home',
		'required' => array(
			array(
				'setting'  => 'site_general_breadcrumb_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'tm-polygon', array(
		'type'     => 'custom',
		'setting'  => 'site_general_hr_' . $priority ++,
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => '<hr />',
		'required' => array(
			array(
				'setting'  => 'site_general_breadcrumb_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'tm-polygon', array(
		'type'     => 'text',
		'setting'  => 'site_general_breadcrumb_you_are_here_text',
		'label'    => esc_html__( '"You are here" text', 'tm-polygon' ),
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => 'You are here:',
		'required' => array(
			array(
				'setting'  => 'site_general_breadcrumb_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );
}
Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_general_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Other settings</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'toggle',
	'setting'     => 'site_general_boxed',
	'label'       => esc_html__( 'Boxed mode', 'tm-polygon' ),
	'description' => esc_html__( 'Turn on this option if you want to enable box mode for content', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 0,
) );