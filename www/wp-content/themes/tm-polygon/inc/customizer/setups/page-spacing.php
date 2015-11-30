<?php
/**
 * Page Spacing
 * =========
 */
$section  = 'page_spacing';
$priority = 1;

Kirki::add_field( 'tm-polygon', array(
	'type'     => 'custom',
	'setting'  => 'page_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'tm-polygon', array(
	'type'      => 'text',
	'setting'   => 'page_spacing_padding',
	'label'     => esc_html__( 'Padding', 'tm-polygon' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '106px 20px 106px 20px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'padding',
	)
) );