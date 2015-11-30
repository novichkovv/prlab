<?php
/**
 * Shortcode attributes
 * @var $type
 * @var $show_title
 * @var $show_excerpt
 * @var $show_meta
 * @var $el_class
 * @var $css
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Recentposts
 */
$output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( shortcode_atts( array(
	'type'         => 'content-type01',
	'show_title'   => true,
	'show_excerpt' => true,
	'show_meta'    => true,
	'el_class'     => '',
), $atts ) );

global $wp_query;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
	'post_type' => 'post',
	'paged'     => $paged
);
wp_reset_postdata();
$loop = new WP_Query( $args );
?>
<?php if ( $loop->have_posts() ) : ?>
	<div class="<?php echo esc_attr( 'postcontent-' . $type ) ?>">
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php get_template_part( 'template-parts/content', $type ); ?>
		<?php endwhile; ?>
		<?php tm_polygon_paging_nav(); ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'tm-polygon' ); ?></p>
<?php endif; ?>
