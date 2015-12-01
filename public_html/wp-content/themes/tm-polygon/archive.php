<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package tm_polygon
 */
$tm_polygon_heading_image = Kirki::get_option( 'tm-polygon', 'page_bg_image' );
$tm_polygon_layout        = Kirki::get_option( 'tm-polygon', 'archive_layout' );
get_header(); ?>
	<header class="big-title" style="background-image: url('<?php echo esc_url( $tm_polygon_heading_image ); ?>')">
		<div class="container">
			<div class="row middle">
				<div class="col-md-6">
					<?php
					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</div>
			<?php if ( function_exists( 'tm_bread_crumb' ) ) { ?>
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
				<?php $class = 'col-md-8'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<main class="content">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'blog' ); ?>
					<?php endwhile; // end of the loop. ?>
					<?php tm_polygon_paging_nav(); ?>
				</main>
			</div>
			<?php if ( $tm_polygon_layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>