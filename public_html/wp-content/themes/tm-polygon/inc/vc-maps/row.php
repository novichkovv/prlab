<?php

$advanced_tab = __( 'Advanced Design Options', 'tm-polygon' );

vc_add_params( 'vc_row', array(
    array(
        'group'       => $advanced_tab,
        'type'        => 'colorpicker',
        'heading'     => "Background overlay",
        'param_name'  => 'row_bg_overlay',
        'description' => __( 'Choose an overlay color for background. Leave blank for none.', 'tm-polygon' ),
    ),
    array(
        'group'       => $advanced_tab,
        'type'        => 'dropdown',
        'heading'     => "Map background",
        'param_name'  => 'row_bg_map',
        'description' => __( 'Use Google map as background for row.', 'tm-polygon' ),
        'value'       => array(
            'None'       => 'none',
            'Google map' => 'google'
        )
    ),
    array(
        'group'       => $advanced_tab,
        'type'        => 'textfield',
        'heading'     => "Coordinate",
        'param_name'  => 'rbm_coordinates',
        'value'       => '40.7590615,-73.969231',
        'description' => __( 'To learn how to get coordinates, visit https://support.google.com/maps/answer/18539?hl=en', 'tm-polygon' ),
        'dependency'  => array(
            'element' => 'row_bg_map',
            'value'   => 'google',
        )
    ),
    array(
        'group'       => $advanced_tab,
        'type'        => 'textfield',
        'heading'     => "Map zoom",
        'param_name'  => 'rbm_zoom',
        'value'       => '13',
        'description' => __( 'Map zoom level', 'tm-polygon' ),
        'dependency'  => array(
            'element' => 'row_bg_map',
            'value'   => 'google',
        )
    ),
    array(
        'group'       => $advanced_tab,
        'type'        => 'dropdown',
        'heading'     => "Map type",
        'param_name'  => 'rbm_type',
        'description' => __( 'Choose a map type or a custom style map', 'tm-polygon' ),
        'value'       => array(
            'Roadmap'    => 'roadmap',
            'Satellite'  => 'satellite',
            'Hybrid'     => 'hybrid',
            'Terrain'    => 'terrain',
            'Custom ...' => 'custom'
        ),
        'dependency'  => array(
            'element' => 'row_bg_map',
            'value'   => 'google',
        )
    ),
    array(
        'group'       => $advanced_tab,
        'type'        => 'textarea_raw_html',
        'heading'     => "Map style",
        'param_name'  => 'rbm_style',
        'description' => __( 'To get the style snippet, visit https://snazzymaps.com.', 'tm-polygon' ),
        'dependency'  => array(
            'element' => 'rbm_type',
            'value'   => 'custom',
        ),
        'value'       => '',
    ),
    array(
        'group'       => $advanced_tab,
        'type'        => 'textfield',
        'heading'     => "Reveal",
        'param_name'  => 'reveal',
        'description' => __( 'Enter <a target="_blank" href="https://github.com/jlmakes/scrollReveal.js/wiki/Keywords">Keyword of ScrollReveal</a>', 'tm-polygon' ),
    ),
));

vc_add_params( 'vc_row_inner', array(
    array(
        'group'       => $advanced_tab,
        'type'        => 'textfield',
        'heading'     => "Reveal",
        'param_name'  => 'reveal',
        'description' => __( 'Enter <a target="_blank" href="https://github.com/jlmakes/scrollReveal.js/wiki/Keywords">Keyword of ScrollReveal</a>', 'tm-polygon' ),
    ),
));