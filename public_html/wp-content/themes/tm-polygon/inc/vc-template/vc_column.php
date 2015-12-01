<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $reveal
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column
 */

$el_class = $width = $css = $offset = '';
$output   = '';
$atts     = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

global $columns_count;
$unique_class = 'thememove-column-' . (int) $columns_count ++;

$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );

$css_classes = array(
	$this->getExtraClass( $el_class ),
	'wpb_column',
	'vc_column_container',
	$unique_class,
	$width,
	vc_shortcode_custom_css_class( $css ),
);

$wrapper_attributes = array();

$css_class            = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

$dataReveal = ( $reveal ) ? 'data-sr="' . esc_attr( $reveal ) . '"' : '';

$output .= '<div ' . implode( ' ', $wrapper_attributes ) . ' ' . $dataReveal . ' >';
$output .= '<div class="wpb_wrapper">';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';

if ( $background_image || $background_color ) :
	?>
	<style>
		.vc_column_container.<?php echo esc_html( $unique_class ) ?>:hover, .<?php echo esc_html( $unique_class ) ?>:focus {
			background-image: url('<?php echo esc_attr( wp_get_attachment_url( $background_image ) ) ?>') !important;
			background-color: <?php echo esc_attr( $background_color ) ?> !important;
		}
	</style>
	<?php
endif;

echo "" . $output;