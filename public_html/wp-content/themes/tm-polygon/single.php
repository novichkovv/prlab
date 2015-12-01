<?php
/**
 * The template for displaying all single posts.
 *
 * @package tm_polygon
 */
$tm_polygon_heading_image = Kirki::get_option( 'tm-polygon', 'post_bg_image' );
$tm_polygon_layout        = Kirki::get_option( 'tm-polygon', 'post_layout' );
get_header(); ?>
	<header class="big-title--single"
	        style="background-image: url('<?php echo esc_url( $tm_polygon_heading_image ); ?>')">
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
	</header>
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
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope"
						         itemtype="http://schema.org/CreativeWork">
							<div class="entry-content">
								<?php get_template_part( 'template-parts/content', 'single' ); ?>
								<?php the_post_navigation(); ?>
								<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>
							</div>
							<!-- .entry-content -->
						</article><!-- #post-## -->
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
			<?php if ( $tm_polygon_layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>