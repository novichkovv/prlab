<?php
vc_map( array(
	'name'                      => esc_html__( 'Testimonials', 'tm-polygon' ),
	'base'                      => 'thememove_testi',
	'category'                  => esc_html__( 'by THEMEMOVE', 'tm-polygon' ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Enable Carousel', 'tm-polygon' ),
			'param_name' => 'enable_carousel',
			'value'      => array(
				__( 'No', 'tm-polygon' )  => 'false',
				__( 'Yes', 'tm-polygon' ) => 'true',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Show Bullets', 'tm-polygon' ),
			'param_name' => 'display_bullets',
			'value'      => array(
				__( 'No', 'tm-polygon' )  => 'false',
				__( 'Yes', 'tm-polygon' ) => 'true',
			),
			'dependency' => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Show Navigation', 'tm-polygon' ),
			'param_name' => 'display_navigation',
			'value'      => array(
				__( 'No', 'tm-polygon' )  => 'false',
				__( 'Yes', 'tm-polygon' ) => 'true',
			),
			'dependency' => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Enable Autoplay', 'tm-polygon' ),
			'param_name' => 'enable_autoplay',
			'value'      => array(
				__( 'No', 'tm-polygon' )  => 'false',
				__( 'Yes', 'tm-polygon' ) => 'true',
			),
			'dependency' => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Slides to display', 'tm-polygon' ),
			'param_name'  => 'slides_to_display',
			'value'       => '',
			'description' => esc_html__( 'Number of Slides to display (default: 2)', 'tm-polygon' ),
			'dependency'  => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Number', 'tm-polygon' ),
			'param_name'  => 'limit',
			'value'       => '',
			'description' => esc_html__( 'Number of Testimonials', 'tm-polygon' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order by', 'tm-polygon' ),
			'param_name'  => 'orderby',
			'value'       => array(
				__( 'None', 'tm-polygon' )       => 'none',
				__( 'ID', 'tm-polygon' )         => 'ID',
				__( 'Title', 'tm-polygon' )      => 'title',
				__( 'Date', 'tm-polygon' )       => 'date',
				__( 'Menu Order', 'tm-polygon' ) => 'menu_order',
			),
			'description' => esc_html__( 'How to order the items', 'tm-polygon' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order', 'tm-polygon' ),
			'param_name'  => 'order',
			'value'       => array(
				__( 'DESC', 'tm-polygon' ) => 'DESC',
				__( 'ASC', 'tm-polygon' )  => 'ASC',
			),
			'description' => esc_html__( 'How to order the items', 'tm-polygon' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Show Author Info', 'tm-polygon' ),
			'param_name'  => 'display_author',
			'value'       => array(
				__( 'No', 'tm-polygon' )  => 'false',
				__( 'Yes', 'tm-polygon' ) => 'true',
			),
			'description' => esc_html__( 'Choose yes to show author name and byline', 'tm-polygon' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Show URL', 'tm-polygon' ),
			'param_name'  => 'display_url',
			'value'       => array(
				__( 'No', 'tm-polygon' )  => 'false',
				__( 'Yes', 'tm-polygon' ) => 'true',
			),
			'description' => esc_html__( 'Choose yes to show author url', 'tm-polygon' ),
			'dependency'  => Array( 'element' => 'display_author', 'value' => array( 'true' ) )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Show Author Image', 'tm-polygon' ),
			'param_name'  => 'display_avatar',
			'value'       => array(
				__( 'No', 'tm-polygon' )  => false,
				__( 'Yes', 'tm-polygon' ) => true,
			),
			'description' => esc_html__( 'Choose yes to show author avatar', 'tm-polygon' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Avatar Size', 'tm-polygon' ),
			'param_name'  => 'size',
			'value'       => '',
			'description' => esc_html__( 'Size of Avatar', 'tm-polygon' ),
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Extra class name', 'tm-polygon' ),
			'param_name' => 'el_class',
		)
	)
) );