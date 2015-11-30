<?php
/**
 * Top Area Layout
 * ==============
 */
$section  = 'top_layout';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'        => 'toggle',
	'setting'     => 'top_layout_enable',
	'label'       => esc_html__( 'Top area', 'tm-polygon' ),
	'description' => esc_html__( 'Enabling this option will display top area', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );