<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     2.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$wc_thememove_page_layout_private = get_post_meta( wc_get_page_id( 'shop' ), "thememove_page_layout_private", true );
$wc_thememove_bread_crumb_enable  = get_post_meta( wc_get_page_id( 'shop' ), "thememove_bread_crumb_enable", true );
$wc_thememove_heading_image       = get_post_meta( wc_get_page_id( 'shop' ), "thememove_heading_image", true );
$wc_thememove_sticky_header       = get_post_meta( wc_get_page_id( 'shop' ), "thememove_sticky_header", true );
$wc_thememove_uncover_enable      = get_post_meta( wc_get_page_id( 'shop' ), "thememove_uncover_enable", true );
$wc_thememove_uncover_enable      = get_post_meta( wc_get_page_id( 'shop' ), "thememove_uncover_enable", true );
$wc_thememove_header_top          = get_post_meta( wc_get_page_id( 'shop' ), "thememove_header_top", true );

$tm_polygon_enable_shop_title = Kirki::get_option( 'tm-polygon', 'enable_shop_title' );
$tm_polygon_shop_heading = Kirki::get_option( 'tm-polygon', 'shop_heading' );
$tm_polygon_shop_description = Kirki::get_option( 'tm-polygon', 'shop_description' );
$tm_polygon_heading_image = Kirki::get_option( 'tm-polygon', 'shop_bg_image' );

if ( $wc_thememove_page_layout_private != 'default' ) {
	$layout = $wc_thememove_page_layout_private;
} else {
	$layout = get_theme_mod( 'site_layout', site_layout );
}
get_header( 'shop' ); ?>
<div class="content-wrapper">
	<?php if ( $tm_polygon_enable_shop_title == 'on' ) { ?>
		<div data-stellar-background-ratio="0.5" class="big-title shop-title entry-header has-bg" style="background-image: url('<?php echo esc_url( $tm_polygon_heading_image ); ?>')">
			<div class="container">
				<?php if ( $tm_polygon_shop_heading ) { ?>
					<div class="entry-title">
						<h1><?php echo esc_html( $tm_polygon_shop_heading ) ?></h1>
						<span class="entry-desc"><?php echo esc_html( $tm_polygon_shop_description ) ?></span>
					</div>
				<?php } else { ?>
					<h1 class="entry-title">
						<?php woocommerce_page_title(); ?>
					</h1>
				<?php } ?>
			</div>
		</div>
		<!-- .entry-header -->
	<?php } ?>
	<div class="container">
		<div class="row">
			<?php if ( $layout == 'sidebar-content' || $layout == 2 ) { ?>
				<?php do_action( 'woocommerce_sidebar' ); ?>
			<?php } ?>
			<?php if ( $layout == 'sidebar-content' || $layout == 'content-sidebar' || $layout == 2 || $layout == 1 ) { ?>
				<?php $class = 'col-md-9'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<?php do_action( 'woocommerce_before_main_content' ); ?>

				<?php do_action( 'woocommerce_archive_description' ); ?>

				<?php if ( have_posts() ) : ?>

					<?php do_action( 'woocommerce_before_shop_loop' ); ?>

					<?php woocommerce_product_loop_start(); ?>

					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

					<?php woocommerce_product_loop_end(); ?>

					<?php do_action( 'woocommerce_after_shop_loop' ); ?>

				<?php elseif ( ! woocommerce_product_subcategories( array(
					'before' => woocommerce_product_loop_start( false ),
					'after'  => woocommerce_product_loop_end( false )
				) )
				) : ?>

					<?php wc_get_template( 'loop/no-products-found.php' ); ?>

				<?php endif; ?>

				<?php do_action( 'woocommerce_after_main_content' ); ?>
			</div>
			<?php if ( $layout == 'content-sidebar' || $layout == 1 ) { ?>
				<?php do_action( 'woocommerce_sidebar' ); ?>
			<?php } ?>
		</div>
	</div>
</div>

<?php get_footer( 'shop' ); ?>
