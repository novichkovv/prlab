<?php
/**
 * Site Logo
 * =========
 */
$section  = 'site_logo';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'image',
	'setting'     => 'site_logo',
	'label'       => esc_html__( 'Logo', 'tm-polygon' ),
	'description' => esc_html__( 'Choose a default logo image to display', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'http://polygon.thememove.com/data/images/logo-02.png',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'image',
	'setting'     => 'site_logo_retina',
	'label'       => esc_html__( 'Retina Logo', 'tm-polygon' ),
	'description' => esc_html__( 'Choose a image for retina logo', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'site_logo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Spacing</div>',
) );


Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Logo Padding', 'tm-polygon' ),
	'setting'   => 'site_logo_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '20px 15px 20px 15px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#site-navigation .menu > li.custom-logo > a, .site-branding',
		'property' => 'padding',
	)
) );
