<?php
/**
 * tm_polygon Theme Customizer
 *
 * @package tm_polygon
 */

/**
 * Configuration for the Kirki Customizer
 * =============================================
 */
function tm_polygon_config() {
	$args = array(
		'styles_priority'      => 999,
		'width'                => '300px',
		'url_path'             => TM_POLYGON_THEME_ROOT . '/core/customizer/kirki/'
	);
	return $args;
}

add_filter( 'kirki/config', 'tm_polygon_config' );

/**
 * Remove Unused Native Sections
 * =============================
 */
function tm_polygon_remove_customizer_sections( $wp_customize ) {
	$wp_customize->remove_section( 'nav' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );

	$wp_customize->remove_control( 'page_for_posts' );

}

add_action( 'customize_register', 'tm_polygon_remove_customizer_sections' );

/**
 * Setting Customizer
 * ==================
 */
function tm_polygon_customizer_sections( $wp_customize ) {
	$wp_customize->get_section( 'io_section' )->priority = '40';
}

if ( function_exists( 'register_section_for_io_section' ) ) {
	add_action( 'customize_register', 'tm_polygon_customizer_sections' );
}

/**
 * General setups
 * ==============
 */
Kirki::add_config( 'tm-polygon', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

$priority = 1;
// Add panels
Kirki::add_panel( 'site', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Site', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'top', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Top Area', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'header', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Header', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'nav', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Navigation', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'button', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Button', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'footer', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Footer', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'copyright', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Copyright', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'page', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Page', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'shop', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Shop', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'post', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Post', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'woo', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Woocommerce', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

Kirki::add_panel( 'custom', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Custom code', 'tm-polygon' ),
	'description' => esc_html__( 'My Description', 'tm-polygon' )
) );

$priority = 1;
// Add sections for site panel
Kirki::add_section( 'site_general', array(
	'title'       => esc_html__( 'General', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all general settings of your site', 'tm-polygon' ),
	'panel'       => 'site',
	'priority'    => $priority ++
) );

Kirki::add_section( 'site_layouts', array(
	'title'       => esc_html__( 'Layouts', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layouts settings of your site', 'tm-polygon' ),
	'panel'       => 'site',
	'priority'    => $priority ++
) );

Kirki::add_section( 'site_logo', array(
	'title'       => esc_html__( 'Logo', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all logo settings of your site', 'tm-polygon' ),
	'panel'       => 'site',
	'priority'    => $priority ++
) );

Kirki::add_section( 'site_favicon', array(
	'title'       => esc_html__( 'Favicon', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all favicon settings of your site', 'tm-polygon' ),
	'panel'       => 'site',
	'priority'    => $priority ++
) );

Kirki::add_section( 'site_color', array(
	'title'       => esc_html__( 'Color', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all color settings of your site', 'tm-polygon' ),
	'panel'       => 'site',
	'priority'    => $priority ++
) );

Kirki::add_section( 'site_style', array(
	'title'       => esc_html__( 'Style', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all style settings of your site', 'tm-polygon' ),
	'panel'       => 'site',
	'priority'    => $priority ++
) );

Kirki::add_section( 'background_image', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of your site', 'tm-polygon' ),
	'panel'       => 'site',
	'priority'    => $priority ++
) );

if ( version_compare( $GLOBALS['wp_version'], '4.3', '>=' ) ) {
	$panel = 'nav_menus';
}else{
	$panel = 'nav';
}
$priority = 1;
// Add sections for navigation panel
Kirki::add_section( 'nav', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of navigation', 'tm-polygon' ),
	'panel'       => $panel,
	'priority'    => $priority ++
) );

Kirki::add_section( 'nav_style', array(
	'title'       => esc_html__( 'Style', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all style settings of navigation', 'tm-polygon' ),
	'panel'       => $panel,
	'priority'    => $priority ++
) );

Kirki::add_section( 'nav_spacing', array(
	'title'       => esc_html__( 'Spacing', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of navigation', 'tm-polygon' ),
	'panel'       => $panel,
	'priority'    => $priority ++
) );

Kirki::add_section( 'nav_bg', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of navigation', 'tm-polygon' ),
	'panel'       => $panel,
	'priority'    => $priority ++
) );

Kirki::add_section( 'nav_border', array(
	'title'       => esc_html__( 'Border', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all border settings of navigation', 'tm-polygon' ),
	'panel'       => $panel,
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for button panel
Kirki::add_section( 'button_layout', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of buttons', 'tm-polygon' ),
	'panel'       => 'button',
	'priority'    => $priority ++
) );

Kirki::add_section( 'button_style', array(
	'title'       => esc_html__( 'Style', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all style settings of buttons', 'tm-polygon' ),
	'panel'       => 'button',
	'priority'    => $priority ++
) );

Kirki::add_section( 'button_spacing', array(
	'title'       => esc_html__( 'Spacing', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of buttons', 'tm-polygon' ),
	'panel'       => 'button',
	'priority'    => $priority ++
) );

Kirki::add_section( 'button_border', array(
	'title'       => esc_html__( 'Border', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all border settings of buttons', 'tm-polygon' ),
	'panel'       => 'button',
	'priority'    => $priority ++
) );

Kirki::add_section( 'button_bg', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of buttons', 'tm-polygon' ),
	'panel'       => 'button',
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for top area panel
Kirki::add_section( 'top_layout', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of top area', 'tm-polygon' ),
	'panel'       => 'top',
	'priority'    => $priority ++
) );

Kirki::add_section( 'top_style', array(
	'title'       => esc_html__( 'Style', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all style settings of top area', 'tm-polygon' ),
	'panel'       => 'top',
	'priority'    => $priority ++
) );

Kirki::add_section( 'top_spacing', array(
	'title'       => esc_html__( 'Spacing', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of top area', 'tm-polygon' ),
	'panel'       => 'top',
	'priority'    => $priority ++
) );

Kirki::add_section( 'top_border', array(
	'title'       => esc_html__( 'Border', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all border settings of top area', 'tm-polygon' ),
	'panel'       => 'top',
	'priority'    => $priority ++
) );

Kirki::add_section( 'top_bg', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of top area', 'tm-polygon' ),
	'panel'       => 'top',
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for header panel
Kirki::add_section( 'header_layout', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of header', 'tm-polygon' ),
	'panel'       => 'header',
	'priority'    => $priority ++
) );

Kirki::add_section( 'header_style', array(
	'title'       => esc_html__( 'Style', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all style settings of header', 'tm-polygon' ),
	'panel'       => 'header',
	'priority'    => $priority ++
) );

Kirki::add_section( 'header_spacing', array(
	'title'       => esc_html__( 'Spacing', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of header', 'tm-polygon' ),
	'panel'       => 'header',
	'priority'    => $priority ++
) );

Kirki::add_section( 'header_border', array(
	'title'       => esc_html__( 'Border', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all border settings of header', 'tm-polygon' ),
	'panel'       => 'header',
	'priority'    => $priority ++
) );

Kirki::add_section( 'header_bg', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of header', 'tm-polygon' ),
	'panel'       => 'header',
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for footer panel
Kirki::add_section( 'footer_layout', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of footer', 'tm-polygon' ),
	'panel'       => 'footer',
	'priority'    => $priority ++
) );

Kirki::add_section( 'footer_style', array(
	'title'       => esc_html__( 'Style', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all style settings of footer', 'tm-polygon' ),
	'panel'       => 'footer',
	'priority'    => $priority ++
) );

Kirki::add_section( 'footer_spacing', array(
	'title'       => esc_html__( 'Spacing', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of footer', 'tm-polygon' ),
	'panel'       => 'footer',
	'priority'    => $priority ++
) );

Kirki::add_section( 'footer_border', array(
	'title'       => esc_html__( 'Border', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all border settings of footer', 'tm-polygon' ),
	'panel'       => 'footer',
	'priority'    => $priority ++
) );

Kirki::add_section( 'footer_bg', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of footer', 'tm-polygon' ),
	'panel'       => 'footer',
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for copyright panel
Kirki::add_section( 'copyright_layout', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of copyright', 'tm-polygon' ),
	'panel'       => 'copyright',
	'priority'    => $priority ++
) );

Kirki::add_section( 'copyright_style', array(
	'title'       => esc_html__( 'Style', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all style settings of copyright', 'tm-polygon' ),
	'panel'       => 'copyright',
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for page panel
Kirki::add_section( 'page_layout', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of pages', 'tm-polygon' ),
	'panel'       => 'page',
	'priority'    => $priority ++
) );

Kirki::add_section( 'page_style', array(
	'title'       => esc_html__( 'Style', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all style settings of pages', 'tm-polygon' ),
	'panel'       => 'page',
	'priority'    => $priority ++
) );

Kirki::add_section( 'page_spacing', array(
	'title'       => esc_html__( 'Spacing', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of pages', 'tm-polygon' ),
	'panel'       => 'page',
	'priority'    => $priority ++
) );

Kirki::add_section( 'page_border', array(
	'title'       => esc_html__( 'Border', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all border settings of pages', 'tm-polygon' ),
	'panel'       => 'page',
	'priority'    => $priority ++
) );

Kirki::add_section( 'page_bg', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of pages', 'tm-polygon' ),
	'panel'       => 'page',
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for page panel
Kirki::add_section( 'shop_layout', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of pages', 'tm-polygon' ),
	'panel'       => 'shop',
	'priority'    => $priority ++
) );

Kirki::add_section( 'shop_bg', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of pages', 'tm-polygon' ),
	'panel'       => 'shop',
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for post panel
Kirki::add_section( 'post_layout', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of posts', 'tm-polygon' ),
	'panel'       => 'post',
	'priority'    => $priority ++
) );

Kirki::add_section( 'post_style', array(
	'title'       => esc_html__( 'Style', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all style settings of posts', 'tm-polygon' ),
	'panel'       => 'post',
	'priority'    => $priority ++
) );

Kirki::add_section( 'post_spacing', array(
	'title'       => esc_html__( 'Spacing', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of posts', 'tm-polygon' ),
	'panel'       => 'post',
	'priority'    => $priority ++
) );

Kirki::add_section( 'post_border', array(
	'title'       => esc_html__( 'Border', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all border settings of posts', 'tm-polygon' ),
	'panel'       => 'post',
	'priority'    => $priority ++
) );

Kirki::add_section( 'post_bg', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of posts', 'tm-polygon' ),
	'panel'       => 'post',
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for woo panel
Kirki::add_section( 'woo_layout', array(
	'title'       => esc_html__( 'Layout', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all layout settings of woocommerce', 'tm-polygon' ),
	'panel'       => 'woo',
	'priority'    => $priority ++
) );

Kirki::add_section( 'woo_color', array(
	'title'       => esc_html__( 'Color', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all color settings of woocommerce', 'tm-polygon' ),
	'panel'       => 'woo',
	'priority'    => $priority ++
) );

Kirki::add_section( 'woo_spacing', array(
	'title'       => esc_html__( 'Spacing', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of woocommerce', 'tm-polygon' ),
	'panel'       => 'woo',
	'priority'    => $priority ++
) );

Kirki::add_section( 'woo_border', array(
	'title'       => esc_html__( 'Border', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all border settings of woocommerce', 'tm-polygon' ),
	'panel'       => 'woo',
	'priority'    => $priority ++
) );

Kirki::add_section( 'woo_bg', array(
	'title'       => esc_html__( 'Background', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control all background settings of woocommerce', 'tm-polygon' ),
	'panel'       => 'woo',
	'priority'    => $priority ++
) );

$priority = 1;
// Add sections for custom code panel
Kirki::add_section( 'custom_css', array(
	'title'       => esc_html__( 'Custom CSS', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control custom css', 'tm-polygon' ),
	'panel'       => 'custom',
	'priority'    => $priority ++
) );

Kirki::add_section( 'custom_js', array(
	'title'       => esc_html__( 'Custom JS', 'tm-polygon' ),
	'description' => esc_html__( 'In this section you can control custom javascript', 'tm-polygon' ),
	'panel'       => 'custom',
	'priority'    => $priority ++
) );

/**
 * Include setups
 * ==============
 */
// Site
require_once get_template_directory() . '/inc/customizer/setups/site-general.php';
require_once get_template_directory() . '/inc/customizer/setups/site-layouts.php';
require_once get_template_directory() . '/inc/customizer/setups/site-logo.php';
if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
	require_once get_template_directory() . '/inc/customizer/setups/site-favicon.php';
}
require_once get_template_directory() . '/inc/customizer/setups/site-color.php';
require_once get_template_directory() . '/inc/customizer/setups/site-style.php';
require_once get_template_directory() . '/inc/customizer/setups/site-bg.php';

// Nav
require_once get_template_directory() . '/inc/customizer/setups/nav-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/nav-style.php';
require_once get_template_directory() . '/inc/customizer/setups/nav-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/nav-border.php';
require_once get_template_directory() . '/inc/customizer/setups/nav-bg.php';

// Button
require_once get_template_directory() . '/inc/customizer/setups/button-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/button-style.php';
require_once get_template_directory() . '/inc/customizer/setups/button-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/button-border.php';
require_once get_template_directory() . '/inc/customizer/setups/button-bg.php';

// Top area
require_once get_template_directory() . '/inc/customizer/setups/top-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/top-style.php';
require_once get_template_directory() . '/inc/customizer/setups/top-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/top-border.php';
require_once get_template_directory() . '/inc/customizer/setups/top-bg.php';

// Header
require_once get_template_directory() . '/inc/customizer/setups/header-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/header-style.php';
require_once get_template_directory() . '/inc/customizer/setups/header-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/header-border.php';
require_once get_template_directory() . '/inc/customizer/setups/header-bg.php';

// Footer
require_once get_template_directory() . '/inc/customizer/setups/footer-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/footer-style.php';
require_once get_template_directory() . '/inc/customizer/setups/footer-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/footer-border.php';
require_once get_template_directory() . '/inc/customizer/setups/footer-bg.php';

// Copyright
require_once get_template_directory() . '/inc/customizer/setups/copyright-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/copyright-style.php';

// Page
require_once get_template_directory() . '/inc/customizer/setups/page-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/page-style.php';
require_once get_template_directory() . '/inc/customizer/setups/page-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/page-bg.php';

// Shop
require_once get_template_directory() . '/inc/customizer/setups/shop-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/shop-bg.php';

// Post
require_once get_template_directory() . '/inc/customizer/setups/post-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/post-style.php';
require_once get_template_directory() . '/inc/customizer/setups/post-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/post-bg.php';


// Custom code
require_once get_template_directory() . '/inc/customizer/setups/custom-css.php';
require_once get_template_directory() . '/inc/customizer/setups/custom-js.php';

// Woocommerce
if ( class_exists( 'WooCommerce' ) ) {
	require_once get_template_directory() . '/inc/customizer/setups/woo-layout.php';
	require_once get_template_directory() . '/inc/customizer/setups/woo-color.php';
}

// IO Section
require_once get_template_directory() . '/inc/customizer/io.php';

/**
 * Add custom css
 * ==============
 */
function tm_polygon_customize_preview_css() {
	wp_enqueue_style( 'tm-polygon-kirki-custom-css', TM_POLYGON_THEME_ROOT . '/core/customizer/css/custom.css' );
}

add_action( 'customize_controls_init', 'tm_polygon_customize_preview_css' );