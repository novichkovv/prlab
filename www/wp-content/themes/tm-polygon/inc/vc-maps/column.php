<?php

$advanced_tab = __( 'Advanced Design Options', 'tm-polygon' );

vc_add_params( 'vc_column', array(
    array(
        'group'       => $advanced_tab,
        'type'        => 'textfield',
        'heading'     => "Reveal",
        'param_name'  => 'reveal',
        'description' => __( 'Enter <a target="_blank" href="https://github.com/jlmakes/scrollReveal.js/wiki/Keywords">Keyword of ScrollReveal</a>', 'tm-polygon' ),
    ),
    array(
        'group'       => $advanced_tab,
        'type'        => 'colorpicker',
        'heading'     => "Background color for hover state",
        'param_name'  => 'background_color',
        'description' => __( 'Choose an color for background. Leave blank for none.', 'tm-polygon' ),
    ),
    array(
        'group'       => $advanced_tab,
        'type'        => 'attach_image',
        'heading'     => "Background image for hover state",
        'param_name'  => 'background_image',
        'description' => __( 'Choose an image for background. Leave blank for none.', 'tm-polygon' ),
    ),
));


vc_add_params( 'vc_column_inner', array(
    array(
        'group'       => $advanced_tab,
        'type'        => 'textfield',
        'heading'     => "Reveal",
        'param_name'  => 'reveal',
        'description' => __( 'Enter <a target="_blank" href="https://github.com/jlmakes/scrollReveal.js/wiki/Keywords">Keyword of ScrollReveal</a>', 'tm-polygon' ),
    ),
));