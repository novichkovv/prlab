<?php
/**
 * Loop Price
 *
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
	<h4 class="price"><?php echo wp_kses( $price_html, wp_kses_allowed_html( 'post' ) ); ?></h4>
<?php endif; ?>
