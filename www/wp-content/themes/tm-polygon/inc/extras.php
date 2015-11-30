<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package tm_polygon
 */

/**
 * Adds custom classes to the array of body classes.
 * ================================================
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function tm_polygon_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	global $tm_polygon_custom_class;
	if ( $tm_polygon_custom_class ) {
		$classes[] = $tm_polygon_custom_class;
	}

	if ( Kirki::get_option( 'tm-polygon', 'site_general_boxed' ) == 1 ) {
		$classes[] = 'boxed';
	}

	$classes[] = Kirki::get_option( 'tm-polygon', 'header_type' );

	global $tm_polygon_page_layout_private;
	if ( $tm_polygon_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
		$tm_polygon_layout = get_post_meta( get_the_ID(), "tm_polygon_page_layout_private", true );
	} else {
		$tm_polygon_layout = Kirki::get_option( 'tm-polygon', 'page_layout' );
	}

	$classes[] = $tm_polygon_layout;

	if ( defined( 'TM_CORE_VERSION' ) ) {
		$classes[] = 'core_' . str_replace( ".", "", TM_CORE_VERSION );
	}

	return $classes;
}

add_filter( 'body_class', 'tm_polygon_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 * ==========================================================================
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 *
	 * @return string The filtered title.
	 */
	function tm_polygon_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name.
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( __( 'Page %s', 'tm-polygon' ), max( $paged, $page ) );
		}

		return $title;
	}

	add_filter( 'wp_title', 'tm_polygon_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function tm_polygon_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}

	add_action( 'wp_head', 'tm_polygon_render_title' );
endif;

/***
 * Get mini cart HTML
 * ==================
 * @return string
 */
if ( class_exists( 'WooCommerce' ) ) {
	function tm_polygon_minicart() {
		$cart_html = '';
		$qty       = WC()->cart->get_cart_contents_count();
		$cart_html .= '<div class="mini-cart__button" title="' . esc_html__( 'View your shopping cart', 'tm-polygon' ) . '">';
		$cart_html .= '<span class="mini-cart-icon akshfsd"' . ' data-count="' . $qty . '"></span>';
		$cart_html .= '</div>';

		return $cart_html;
	}

	add_filter( 'woocommerce_add_to_cart_fragments', 'tm_polygon_header_add_to_cart_fragment' );
}

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 * ========================================================================
 *
 * @param $fragments
 *
 * @return mixed
 */
if ( class_exists( 'WooCommerce' ) ) {
	function tm_polygon_header_add_to_cart_fragment( $fragments ) {
		ob_start();
		$cart_html = tm_polygon_minicart();
		echo "" . $cart_html;
		$fragments['.mini-cart__button'] = ob_get_clean();

		return $fragments;
	}
}

/**
 * Custom Comment Form
 * ========================================================================
 */
function tm_polygon_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, $size = '100' ); ?>
		</div>
		<div class="comment-content">
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'tm-polygon' ) ?></em>
				<br/>
			<?php endif; ?>
			<div class="metadata">
				<?php printf( __( '<cite class="fn">%s</cite>', 'tm-polygon' ), get_comment_author_link() ) ?> <br/>
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<?php printf( __( '%1$s', 'tm-polygon' ), get_comment_date(), get_comment_time() ) ?></a>
				<?php edit_comment_link( esc_html__( '(Edit)', 'tm-polygon' ), '  ', '' ) ?>
			</div>
			<?php comment_text() ?>
			<?php comment_reply_link( array_merge( $args, array(
				'depth'     => $depth,
				'max_depth' => $args['max_depth']
			) ) ) ?>
		</div>
	</div>
	<?php
}

/**
 * Extra Info
 * =============
 */
function tm_polygon_extra_info() {
	global $wp_version, $woocommerce;
	$child_theme        = wp_get_theme();
	$child_theme_in_use = false;
	if ( TM_POLYGON_PARENT_THEME_NAME != $child_theme->name ) {
		$child_theme_in_use = true;
	}
	$vc_version = "Not activated";
	if ( defined( 'WPB_VC_VERSION' ) ) {
		$vc_version = "v" . WPB_VC_VERSION;
	}
	$tm_core_version = "Not activated";
	if ( defined( 'TM_CORE_VERSION' ) ) {
		$tm_core_version = "v" . TM_CORE_VERSION;
	}
	?>
	<!--
    * WordPress: v<?php echo esc_html( $wp_version ) . "\n"; ?>
    * ThemMove Core: <?php echo esc_html( $tm_core_version ); ?><?php echo "\n"; ?>
    <?php if ( class_exists( 'WooCommerce' ) ) : ?>* WooCommerce: v<?php echo esc_html( $woocommerce->version ) . "\n"; ?><?php else : ?>* WooCommerce: Not Installed <?php echo "\n"; ?><?php endif; ?>
    * Visual Composer: <?php echo esc_html( $vc_version ); ?><?php echo "\n"; ?>
    * Theme: <?php echo esc_html( TM_POLYGON_PARENT_THEME_NAME ); ?> v<?php echo esc_html( TM_POLYGON_PARENT_THEME_VERSION ); ?> by <?php echo esc_html( TM_POLYGON_PARENT_THEME_AUTHOR ) . "\n"; ?>
    * Child Theme: <?php if ( $child_theme_in_use == true ) { ?>Activated<?php } else { ?>Not activated<?php } ?><?php echo "\n"; ?>
    -->
<?php }

add_action( 'wp_head', 'tm_polygon_extra_info', 9999 );