<?php
/**
 * Shortcode attributes
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Metaportfolio
 */
$output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( shortcode_atts( array(
	'el_class' => '',
), $atts ) );
$client     = get_post_meta( get_the_ID(), "_client", true );
$client_url = get_post_meta( get_the_ID(), "_url", true );
?>
<?php if ( TM_POLYGON_PORTFOLIO_TYPE == get_post_type() ) : ?>
<div class="portfolio-metadata">
	<div>
		<h5><?php echo esc_html__( 'DATE', 'tm-polygon' ) ?></h5>
		<span class="metadata"><?php echo get_the_date( get_option( 'date_format' ) ); ?></span>
	</div>
	<div>
		<h5><?php echo esc_html__( 'CLIENT', 'tm-polygon' ) ?></h5>
		<span class="metadata"><?php echo esc_html( $client ) ?></span>
	</div>
	<div>
		<h5><?php echo esc_html__( 'CATEGORY', 'tm-polygon' ) ?></h5>
				<span
					class="metadata"><?php echo get_the_term_list( get_the_ID(), 'project-category', '', esc_html__( ', ', 'tm-polygon' ) ) ?></span>
	</div>
	<div>
		<h5><?php echo esc_html__( 'SHARE', 'tm-polygon' ) ?></h5>

		<div class="metadata">
				<span><a target="_blank"
				         href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ) ?>"><i
							class="fa fa-facebook"></i></a></span>
				<span><a target="_blank"
				         href="http://twitter.com/share?text=<?php echo urlencode( get_the_title() . "&url=" . get_permalink() . "&via=twitter&related=" . "coderplus:Wordpress Tips, jQuery and more" ); ?>"><i
							class="fa fa-twitter"></i></a></span>
				<span><a target="_blank"
				         href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink() ) ?>"><i
							class="fa fa-google-plus"></i></a></span>
		</div>
	</div>
	<div class="btn-visit-site">
		<a class="btn"
		   href="<?php echo esc_url( $client_url ); ?>"><?php esc_html_e( 'VISIT WEBSITE', 'tm-polygon' ) ?></a>
	</div>
</div>
<?php endif; ?>