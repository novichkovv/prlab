<?php
/**
 * Shortcode attributes
 * @var $url
 * @var $player_scale
 * @var $player_color
 * @var $player_color_hover
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Video_Player
 */
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( shortcode_atts( array(
	'url'                => '',
	'player_scale'       => 1,
	'player_color'       => '#ffffff',
	'player_color_hover' => '',
	'el_class'           => '',
	'css'                => '',
), $atts ) );

$el_class  = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

global $tm_video_player_id;
$tm_video_player_id = (int) $tm_video_player_id ++;

?>
<style type="text/css">
	#tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> .svg-video-player {
		transform: scale(<?php echo esc_attr( $player_scale); ?>, <?php echo esc_attr( $player_scale ); ?>);
	}

	#tm_video-player-<?php echo esc_attr( $tm_video_player_id); ?> a:hover .svg-video-player {
		transform: scale(<?php echo esc_attr( $player_scale * 1.2 ); ?>, <?php echo esc_attr( $player_scale * 1.2 ); ?>);
	}

	<?php if ( $player_color ) : ?>
	#tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> .svg-video-player .svg-video-player-border {
		stroke: <?php echo esc_attr( $player_color ); ?>;
	}

	#tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> .svg-video-player .svg-video-player-icon {
		fill: <?php echo esc_attr( $player_color ); ?>;
	}

	<?php endif; ?>

	<?php if ( $player_color_hover ) : ?>
	#tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> a:hover .svg-video-player .svg-video-player-border {
		stroke: <?php echo esc_attr( $player_color_hover ); ?>;
	}

	#tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> a:hover .svg-video-player .svg-video-player-icon {
		fill: <?php echo esc_attr( $player_color_hover ); ?>;
	}

	<?php endif; ?>
</style>

<div id="tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?>"
     class="tm_video-player <?php echo esc_attr( $css_class . ' ' . $el_class ); ?>">
	<a href="<?php echo esc_url( $url ); ?>">
		<svg class="svg-video-player" viewBox="0 0 100 100" version="1.1"
		     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
		     x="0px" y="0px" width="100px" height="100px"
			>
        <g>
	        <path class="svg-video-player-border"
	              d="M 2.5 50 C 2.5 23.7671 23.766 2.5 50 2.5 C 76.234 2.5 97.5 23.7671 97.5 50 C 97.5 76.2329 76.234 97.5 50 97.5 C 23.766 97.5 2.5 76.2329 2.5 50 Z"
	              stroke="#ffffff" stroke-width="2" fill="none"/>
	        <path class="svg-video-player-icon" d="M 40.5 30.2085 L 40.5 69.7915 L 69 49.2085 L 40.5 30.2085 Z"
	              fill="#ffffff"/>
        </g>
    </svg>
	</a>
</div>
<?php
echo "" . $this->endBlockComment( 'thememove_video_player' );
?>

<script>
	jQuery(document).ready(function ($) {
		$('#tm_video-player-<?php echo esc_attr( $tm_video_player_id ); ?> a').swipebox({
			autoplayVideos: true
		});
	});
</script>