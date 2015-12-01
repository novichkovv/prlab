<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package tm_polygon
 */

$tm_polygon_page_layout_private = get_post_meta( get_the_ID(), "tm_polygon_page_layout_private", true );
$tm_polygon_header_top          = get_post_meta( get_the_ID(), "tm_polygon_header_top", true );
$tm_polygon_sticky_menu         = get_post_meta( get_the_ID(), "tm_polygon_sticky_menu", true );
$tm_polygon_custom_logo         = get_post_meta( get_the_ID(), "tm_polygon_custom_logo", true );
$tm_polygon_heading_image       = get_post_meta( get_the_ID(), "tm_polygon_heading_image", true );
$tm_polygon_bread_crumb_enable  = get_post_meta( get_the_ID(), "tm_polygon_bread_crumb_enable", true );
$tm_polygon_disable_comment     = get_post_meta( get_the_ID(), "tm_polygon_disable_comment", true );
$tm_polygon_disable_title       = get_post_meta( get_the_ID(), "tm_polygon_disable_title", true );
$tm_polygon_custom_class        = get_post_meta( get_the_ID(), "tm_polygon_custom_class", true );
if ( $tm_polygon_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
	$tm_polygon_layout = get_post_meta( get_the_ID(), "tm_polygon_page_layout_private", true );
} else {
	$tm_polygon_layout = Kirki::get_option( 'tm-polygon', 'page_layout' );
}
if ( $tm_polygon_heading_image ) {
	$tm_polygon_heading_image = get_post_meta( get_the_ID(), "tm_polygon_heading_image", true );
} else {
	$tm_polygon_heading_image = Kirki::get_option( 'tm-polygon', 'page_bg_image' );
}
get_header(); ?>
<?php if ( $tm_polygon_disable_title != 'on' ) { ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_polygon_heading_image ); ?>')">
		<div class="container">
			<div class="row middle">
				<?php the_title( '<h1 class="entry-title col-md-6">', '</h1>' ); ?>
				<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'tm-polygon', 'site_general_breadcrumb_enable' ) == 1 ) { ?>
					<div class="breadcrumb col-md-6 end">
						<div class="container">
							<?php echo tm_bread_crumb( array( 'home_label' => Kirki::get_option( 'tm-polygon', 'site_general_breadcrumb_home_text' ) ) ); ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>
<div class="container">
	<div class="row">
		<?php if ( $tm_polygon_layout == 'sidebar-content' ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
		<?php if ( $tm_polygon_layout == 'sidebar-content' || $tm_polygon_layout == 'content-sidebar' ) { ?>
			<?php $class = 'col-md-9'; ?>
		<?php } else { ?>
			<?php $class = 'col-md-12'; ?>
		<?php } ?>
		<div class="<?php echo esc_attr( $class ); ?>">
			<div class="content">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>">
						<div class="entry-content">
							<?php the_content(); ?>
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tm-polygon' ),
								'after'  => '</div>',
							) );
							?>
						</div>
						<!-- .entry-content -->
					</article><!-- #post-## -->
					<?php if ( ( comments_open() || get_comments_number() ) && $tm_polygon_disable_comment != 'on' ) : comments_template(); endif; ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<?php if ( $tm_polygon_layout == 'content-sidebar' ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
	</div>
</div>
<?php get_footer(); ?>
