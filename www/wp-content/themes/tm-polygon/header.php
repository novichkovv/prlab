<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tm_polygon
 */
?>
<?php tha_html_before(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php tha_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
		<link rel="shortcut icon" href="<?php echo Kirki::get_option( 'tm-polygon', 'site_favicon' ); ?>">
		<link rel="apple-touch-icon" href="<?php echo Kirki::get_option( 'tm-polygon', 'site_apple_touch_icon' ); ?>"/>
	<?php } ?>
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php tha_body_top(); ?>
	<div class="snap-drawers">
		<div class="snap-drawer snap-drawer-left">
			<?php wp_nav_menu( array( 'theme_location'  => 'primary', 'menu_id' => 'mobile-menu', 'container_class' => 'mobile-menu' ) ); ?>
		</div>
		<div class="snap-drawer snap-drawer-right"></div>
	</div>
	<div id="page" class="hfeed site">
		<?php
		$tm_polygon_header_type = Kirki::get_option( 'tm-polygon', 'header_type' );
		require_once get_template_directory() .'/template-parts/' . $tm_polygon_header_type . '.php';
		?>
		<?php tha_content_before(); ?>
		<div id="content" class="site-content">
			<?php tha_content_top(); ?>
