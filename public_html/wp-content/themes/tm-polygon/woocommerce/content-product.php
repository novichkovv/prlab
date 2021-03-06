<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop'] ++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
?>
<li <?php post_class( $classes ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<div class="image-product-contain">
		<?php
		/**
		 * woocommerce_before_shop_loop_item_title hook
		 *
		 * @hooked woocommerce_show_product_loop_sale_flash - 10
		 * @hooked woocommerce_template_loop_product_thumbnail - 10
		 */
		add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
		do_action( 'woocommerce_after_shop_loop_item' );
		do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
		<a class="btn btn-view-detail skin-fill-blue" href="<?php the_permalink(); ?>">
			<span class="pe-7s-search"></span>
		</a>
		<h6><?php esc_html_e( 'VIEW DETAILS', 'tm-polygon' ) ?></h6>
	</div>
	<div class="container woo-content-product">
		<div class="row">
			<div class="col-xs-12 center">
				<a href="<?php the_permalink(); ?>">

					<h5><?php the_title(); ?></h5>
				</a>
			</div>
			<div class="col-xs-12 center">
				<?php
				/**
				 * woocommerce_after_shop_loop_item_title hook
				 *
				 * @hooked woocommerce_template_loop_rating - 5
				 * @hooked woocommerce_template_loop_price - 10
				 */
				remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
				do_action( 'woocommerce_after_shop_loop_item_title' );
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 center">
				<?php

				/**
				 * woocommerce_after_shop_loop_item hook
				 *
				 * @hooked woocommerce_template_loop_add_to_cart - 10
				 */
				add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_rating', 10 );
				remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
				do_action( 'woocommerce_after_shop_loop_item' );

				?>
			</div>
		</div>
	</div>
</li>