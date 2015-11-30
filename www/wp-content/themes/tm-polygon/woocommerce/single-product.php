<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$tm_polygon_enable_shop_title = Kirki::get_option( 'tm-polygon', 'enable_shop_title' );
$tm_polygon_shop_heading = Kirki::get_option( 'tm-polygon', 'shop_heading' );
$tm_polygon_shop_description = Kirki::get_option( 'tm-polygon', 'shop_description' );
$tm_polygon_heading_image = Kirki::get_option( 'tm-polygon', 'shop_bg_image' );

get_header( 'shop' ); ?>
<div class="content-wrapper">
	<?php if ( $tm_polygon_enable_shop_title == 'on' ) { ?>
	<div data-stellar-background-ratio="0.5" class="big-title shop-title entry-header has-bg" style="background-image: url('<?php echo esc_url( $tm_polygon_heading_image ); ?>')">
		<div class="container">
			<?php if ( $tm_polygon_shop_heading ) { ?>
				<div class="entry-title">
					<h1><?php echo esc_html( $tm_polygon_shop_heading ) ?></h1>
					<span class="entry-desc"><?php echo esc_html( $tm_polygon_shop_description  ) ?></span>
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
			<div class="col-md-12">
				<?php do_action( 'woocommerce_before_main_content' ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php wc_get_template_part( 'content', 'single-product' ); ?>
				<?php endwhile; // end of the loop. ?>
				<?php do_action( 'woocommerce_after_main_content' ); ?>
			</div>
			<?php do_action( 'woocommerce_sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer( 'shop' ); ?>
