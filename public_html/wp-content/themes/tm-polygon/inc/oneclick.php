<?php
add_filter( 'thememove_import_theme', 'tm_polygon_import_theme' );

function tm_polygon_import_theme() {
	return TM_POLYGON_PARENT_THEME_NAME;
}

add_filter( 'thememove_import_demos', 'tm_polygon_import_demos' );

function tm_polygon_import_demos() {
	return array(
		'thememove01' => TM_POLYGON_PARENT_THEME_NAME,
	);
}

add_filter( 'thememove_import_types', 'tm_polygon_import_types' );

function tm_polygon_import_types() {
	return array(
		'all'            => 'All',
		'content'        => 'Content',
		'widgets'        => 'Widgets',
		'page_options'   => 'Page Options',
		'menus'          => 'Menus',
		'essential_grid' => 'Essential Grid',
		'rev_slider'     => 'Revolution Slider',
		'vc_templates'   => 'VC Templates'
	);
}