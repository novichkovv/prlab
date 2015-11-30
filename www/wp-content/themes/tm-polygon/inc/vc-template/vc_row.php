<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $full_width
 * @var $full_height
 * @var $content_placement
 * @var $parallax
 * @var $parallax_image
 * @var $css
 * @var $el_id
 * @var $video_bg
 * @var $video_bg_url
 * @var $video_bg_parallax
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row
 */
$output = $after_output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

wp_enqueue_script( 'wpb_composer_front_js' );

$el_class = $this->getExtraClass( $el_class );

$vc_custom_css = vc_shortcode_custom_css_class( $css );

$css_classes        = array(
	'vc_row',
	'wpb_row', //deprecated
	'vc_row-fluid',
	$el_class,
	$vc_custom_css,
);
$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}
if ( ! empty( $full_width ) ) {
	$wrapper_attributes[] = 'data-vc-full-width="true"';
	$wrapper_attributes[] = 'data-vc-full-width-init="false"';
	if ( 'stretch_row_content' === $full_width ) {
		$wrapper_attributes[] = 'data-vc-stretch-content="true"';
	} elseif ( 'stretch_row_content_no_spaces' === $full_width ) {
		$wrapper_attributes[] = 'data-vc-stretch-content="true"';
		$css_classes[]        = 'vc_row-no-padding';
	}
	$after_output .= '<div class="vc_row-full-width"></div>';
}

if ( ! empty( $full_height ) ) {
	$css_classes[] = ' vc_row-o-full-height';
	if ( ! empty( $content_placement ) ) {
		$css_classes[] = ' vc_row-o-content-' . $content_placement;
	}
}

$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );

if ( $has_video_bg ) {
	$parallax       = $video_bg_parallax;
	$parallax_image = $video_bg_url;
	$css_classes[]  = ' vc_video-bg-container';
	wp_enqueue_script( 'vc_youtube_iframe_api_js' );
}

if ( ! empty( $parallax ) ) {
	wp_enqueue_script( 'vc_jquery_skrollr_js' );
	$wrapper_attributes[] = 'data-vc-parallax="1.5"'; // parallax speed
	$css_classes[]        = 'vc_general vc_parallax vc_parallax-' . $parallax;
	if ( strpos( $parallax, 'fade' ) !== false ) {
		$css_classes[]        = 'js-vc_parallax-o-fade';
		$wrapper_attributes[] = 'data-vc-parallax-o-fade="on"';
	} elseif ( strpos( $parallax, 'fixed' ) !== false ) {
		$css_classes[] = 'js-vc_parallax-o-fixed';
	}
}

if ( ! empty ( $parallax_image ) ) {
	if ( $has_video_bg ) {
		$parallax_image_src = $parallax_image;
	} else {
		$parallax_image_id  = preg_replace( '/[^\d]/', '', $parallax_image );
		$parallax_image_src = wp_get_attachment_image_src( $parallax_image_id, 'full' );
		if ( ! empty( $parallax_image_src[0] ) ) {
			$parallax_image_src = $parallax_image_src[0];
		}
	}
	$wrapper_attributes[] = 'data-vc-parallax-image="' . esc_attr( $parallax_image_src ) . '"';
}
if ( ! $parallax && $has_video_bg ) {
	$wrapper_attributes[] = 'data-vc-video-bg="' . esc_attr( $video_bg_url ) . '"';
}
$css_class            = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

// Map background
$map_bg = '';
// Decode custom style map
$map_style_output = ( $rbm_type == "custom" ) ? esc_attr( $rbm_style ) : '';
// Set map type to roadmap if custom style is used
$rbm_type = ( $rbm_type == 'custom' ) ? 'roadmap' : $rbm_type;

if ( $row_bg_map == 'google' ) {
	$map_bg .= '<script src="https://maps.googleapis.com/maps/api/js"></script>';
	$map_bg .= '<div class="tm-vc-row-bg-map tm-map" data-coor="[' . $rbm_coordinates . ']" data-zoom="' . $rbm_zoom . '" data-control-ui="false" data-scroll-wheel="false" data-map-type="' . $rbm_type . '" data-marker="" data-style="' . $map_style_output . '"></div>';
}

// Background overlay
$row_bg_overlay_output = '';
if ( $row_bg_overlay != '' ) {
	$row_bg_overlay_output = '<div class="tm-vc-row-overlay" style="background-color: ' . $row_bg_overlay . '"></div>';
}

$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
if ( $reveal ) {
	$output .= '<div data-sr="' . esc_attr( $reveal ) . '">';
}
$output .= $map_bg;
$output .= $row_bg_overlay_output;
$output .= wpb_js_remove_wpautop( $content );
if ( $reveal ) {
	$output .= '</div>';
}

$output .= '</div>';
$output .= $after_output;

echo "" . $output;
?>
<?php if ( $map_bg ) : ?>
	<script>
		jQuery(document).ready(function ($) {
			var mapCounter = 1;

			$('.tm-map').each(function () {
				$(this).attr('id', 'ht-map-' + mapCounter);
				mapCounter++;
				var id = $(this).attr('id');

				function gmapInitialize(id) {
					var map_canvas = document.getElementById(id),
						$el = $(map_canvas);
					var coor = $el.data('coor');
					var zooming = $el.data('zoom');
					var mapType = $el.data('map-type');
					var controlUI = $el.data('control-ui') ? false : true;
					var scrollWheel = $el.data('scroll-wheel');
					var marker = $el.data('marker');
					var style = $el.data('style');
					var myLatlng = new google.maps.LatLng(coor[0], coor[1]);
					var map_options = {
						center: myLatlng,
						zoom: zooming,
						mapTypeId: mapType,
						disableDefaultUI: controlUI,
						scrollwheel: scrollWheel,
						styles: style
					}
					var map = new google.maps.Map(map_canvas, map_options);

					if (marker != "") {
						var mapMarker = new google.maps.Marker({
							position: myLatlng,
							map: map,
							title: marker
						});
					}
				}

				window.gmapInitialize = gmapInitialize;

				gmapInitialize(id);
			});
		});
	</script>
<?php endif; ?>