<?php

vc_add_params( 'vc_custom_heading', array(
    array(
        'type'        => 'textfield',
        'heading'     => __( 'Font Weight', 'tm-polygon' ),
        'param_name'  => 'tm_font_weight',
    ),
    array(
        'type'        => 'dropdown',
        'heading'     => __( 'Text Transform', 'tm-polygon' ),
        'param_name'  => 'tm_text_transform',
        'value' => array(
            __( 'None', 'tm-polygon' )            => 'none',
            __( 'Capitalize', 'tm-polygon' )      => 'capitalize',
            __( 'Uppercase', 'tm-polygon' )       => 'uppercase',
            __( 'Lowercase', 'tm-polygon' )       => 'lowercase',
            __( 'Initial', 'tm-polygon' )         => 'initial',
            __( 'Inherit', 'tm-polygon' )         => 'inherit',
        ),
    ),
    array(
        'type'        => 'textfield',
        'heading'     => __( 'Letter Spacing', 'tm-polygon' ),
        'param_name'  => 'tm_letter_spacing',
    ),
));