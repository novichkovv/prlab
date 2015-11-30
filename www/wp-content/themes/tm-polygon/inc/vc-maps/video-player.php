<?php
vc_map( array(
	'name'     => __( 'Video Player', 'tm-polygon' ),
	'base'     => 'thememove_video_player',
	'category' => sprintf( __( 'by %s', 'tm-polygon' ), TM_POLYGON_PARENT_THEME_NAME ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => 'Video URL',
			'admin_label' => true,
			'param_name'  => 'url',
			'description' => __( 'Enter your video url (Youtube/Vimeo) here', 'tm-polygon' ),
			'value'       => 'http://vimeo.com/92033601',
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Player Scale',
			'admin_label' => false,
			'param_name'  => 'player_scale',
			'value'       => '1',
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => 'Player Color',
			'admin_label' => false,
			'param_name'  => 'player_color',
			'description' => __( 'Color of video player', 'tm-polygon' ),
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => 'Player Color on hover',
			'admin_label' => false,
			'param_name'  => 'player_color_hover',
			'description' => __( 'Color of video player on hover', 'tm-polygon' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Class', 'tm-polygon' ),
			'admin_label' => false,
			'param_name'  => 'el_class',
		),
		array(
			'type'       => 'css_editor',
			'heading'    => __( 'CSS', 'tm-polygon' ),
			'param_name' => 'css',
			'group'      => __( 'Design Options', 'tm-polygon' ),
		),
	)
) );