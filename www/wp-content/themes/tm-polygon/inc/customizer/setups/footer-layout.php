<?php
/**
 * Footer Layout
 * ==============
 */
$section  = 'footer_layout';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'toggle',
	'setting'     => 'footer_layout_enable',
	'label'       => esc_html__( 'Use footer', 'tm-polygon' ),
	'description' => esc_html__( 'Enabling this option will display footer area', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );
