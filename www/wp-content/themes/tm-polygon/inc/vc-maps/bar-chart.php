<?php
vc_map( array(
	'name' => __( 'Progress Bar', 'tm-polygon' ),
	'base' => 'vc_progress_bar',
	'icon' => 'icon-wpb-graph',
	'category' => __( 'Content', 'tm-polygon' ),
	'description' => __( 'Animated progress bar', 'tm-polygon' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'tm-polygon' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'tm-polygon' )
		),
		array(
			'type' => 'param_group',
			'heading' => __( 'Values', 'tm-polygon' ),
			'param_name' => 'values',
			'description' => __( 'Enter values for graph - value, title and color.', 'tm-polygon' ),
			'value' => urlencode( json_encode( array(
				array(
					'label' => __( 'Development', 'tm-polygon' ),
					'value' => '90',
				),
				array(
					'label' => __( 'Design', 'tm-polygon' ),
					'value' => '80',
				),
				array(
					'label' => __( 'Marketing', 'tm-polygon' ),
					'value' => '70',
				),
			) ) ),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => __( 'Label', 'tm-polygon' ),
					'param_name' => 'label',
					'description' => __( 'Enter text used as title of bar.', 'tm-polygon' ),
					'admin_label' => true,
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Icon class', 'tm-polygon' ),
					'param_name' => 'icon_class',
					'description' => __( 'Enter icon class.', 'tm-polygon' ),
					'admin_label' => true,
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Value', 'tm-polygon' ),
					'param_name' => 'value',
					'description' => __( 'Enter value of bar.', 'tm-polygon' ),
					'admin_label' => true,
				),
				array(
					'type' => 'dropdown',
					'heading' => __( 'Color', 'tm-polygon' ),
					'param_name' => 'color',
					'value' => array(
						           __( 'Default', 'tm-polygon' ) => ''
					           ) + array(
						           __( 'Classic Grey', 'tm-polygon' ) => 'bar_grey',
						           __( 'Classic Blue', 'tm-polygon' ) => 'bar_blue',
						           __( 'Classic Turquoise', 'tm-polygon' ) => 'bar_turquoise',
						           __( 'Classic Green', 'tm-polygon' ) => 'bar_green',
						           __( 'Classic Orange', 'tm-polygon' ) => 'bar_orange',
						           __( 'Classic Red', 'tm-polygon' ) => 'bar_red',
						           __( 'Classic Black', 'tm-polygon' ) => 'bar_black',
					           ) + array(
						           __( 'Custom Color', 'tm-polygon' ) => 'custom'
					           ),
					'description' => __( 'Select single bar background color.', 'tm-polygon' ),
					'admin_label' => true,
					'param_holder_class' => 'vc_colored-dropdown'
				),
				array(
					'type' => 'colorpicker',
					'heading' => __( 'Custom color', 'tm-polygon' ),
					'param_name' => 'customcolor',
					'description' => __( 'Select custom single bar background color.', 'tm-polygon' ),
					'dependency' => array(
						'element' => 'color',
						'value' => array( 'custom' )
					),
				),
				array(
					'type' => 'colorpicker',
					'heading' => __( 'Custom text color', 'tm-polygon' ),
					'param_name' => 'customtxtcolor',
					'description' => __( 'Select custom single bar text color.', 'tm-polygon' ),
					'dependency' => array(
						'element' => 'color',
						'value' => array( 'custom' )
					),
				),
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Units', 'tm-polygon' ),
			'param_name' => 'units',
			'description' => __( 'Enter measurement units (Example: %, px, points, etc. Note: graph value and units will be appended to graph title).', 'tm-polygon' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'tm-polygon' ),
			'param_name' => 'bgcolor',
			'value' => array(
				           __( 'Classic Grey', 'tm-polygon' ) => 'bar_grey',
				           __( 'Classic Blue', 'tm-polygon' ) => 'bar_blue',
				           __( 'Classic Turquoise', 'tm-polygon' ) => 'bar_turquoise',
				           __( 'Classic Green', 'tm-polygon' ) => 'bar_green',
				           __( 'Classic Orange', 'tm-polygon' ) => 'bar_orange',
				           __( 'Classic Red', 'tm-polygon' ) => 'bar_red',
				           __( 'Classic Black', 'tm-polygon' ) => 'bar_black',
			           ) + array(
				           __( 'Custom Color', 'tm-polygon' ) => 'custom'
			           ),
			'description' => __( 'Select bar background color.', 'tm-polygon' ),
			'admin_label' => true,
			'param_holder_class' => 'vc_colored-dropdown',
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Bar custom background color', 'tm-polygon' ),
			'param_name' => 'custombgcolor',
			'description' => __( 'Select custom background color for bars.', 'tm-polygon' ),
			'dependency' => array( 'element' => 'bgcolor', 'value' => array( 'custom' ) )
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Bar custom text color', 'tm-polygon' ),
			'param_name' => 'customtxtcolor',
			'description' => __( 'Select custom text color for bars.', 'tm-polygon' ),
			'dependency' => array( 'element' => 'bgcolor', 'value' => array( 'custom' ) )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Options', 'tm-polygon' ),
			'param_name' => 'options',
			'value' => array(
				__( 'Add stripes', 'tm-polygon' ) => 'striped',
				__( 'Add animation (Note: visible only with striped bar).', 'tm-polygon' ) => 'animated'
			)
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'tm-polygon' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'tm-polygon' )
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'tm-polygon' ),
			'param_name' => 'css',
			'group' => __( 'Design Options', 'tm-polygon' )
		),
	)
) );