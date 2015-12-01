<?php
/**
 * Loop Rating
 *
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
	return;
}
?>

<?php if ( $rating_html = $product->get_rating_html() ) : ?>
	<div class="col-xs-12 center">
		<?php echo wp_kses( $rating_html, wp_kses_allowed_html( 'post' ) ); ?>
	</div>
<?php endif; ?>
