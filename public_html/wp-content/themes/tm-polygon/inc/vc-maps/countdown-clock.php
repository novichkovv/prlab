<?php
$months = array();
for($i = 0; $i < 12; $i++) {
	$months[$i] = ($i + 1);
}
$days = array();
for($i = 0; $i < 31; $i++) {
	$days[$i + 1] = ($i + 1);
}
$hours = array();
for($i = 0; $i < 24; $i++) {
	$hours[$i] = ($i + 1);
}
$minutes = array();
for($i = 0; $i < 60; $i++) {
	$minutes[$i] = ($i + 1);
}
$seconds = array();
for($i = 0; $i < 60; $i++) {
	$seconds[$i] = ($i + 1);
}

vc_map( array(
	'name'        => esc_html__( 'Countdown Clock', 'tm-polygon' ),
	'base'        => 'thememove_countdownclock',
	'category'    => esc_html__( 'by THEMEMOVE', 'tm-polygon' ),
	'description' => esc_html__( 'Countdown clock', 'tm-polygon' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Year', 'tm-polygon' ),
			'param_name'  => 'year',
			'description' => esc_html__( 'Input year (default is current year)', 'tm-polygon' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Month', 'tm-polygon' ),
			'param_name'  => 'month',
			'value'       => $months,
			'description' => esc_html__( 'Select month.', 'tm-polygon' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Day', 'tm-polygon' ),
			'param_name'  => 'day',
			'value'       => $days,
			'description' => esc_html__( 'Select day.', 'tm-polygon' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Hours', 'tm-polygon' ),
			'param_name'  => 'hour',
			'value'       => $hours,
			'description' => esc_html__( 'Select hour.', 'tm-polygon' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Minute', 'tm-polygon' ),
			'param_name'  => 'minute',
			'value'       => $minutes,
			'description' => esc_html__( 'Select minute.', 'tm-polygon' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Second', 'tm-polygon' ),
			'param_name'  => 'second',
			'value'       => $seconds,
			'description' => esc_html__( 'Select second.', 'tm-polygon' )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Type', 'tm-polygon' ),
			'admin_label' => true,
			'param_name'  => 'type',
			'description' => esc_html__( 'Choose a countdown type', 'tm-polygon' ),
			'value'       => array(
				__( 'Type 01', 'tm-polygon' )   => 'type01',
				__( 'Type 02', 'tm-polygon' )   => 'type02',
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'tm-polygon' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'tm-polygon' )
		),

	),
) );
