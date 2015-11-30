<?php
/**
 * The template for displaying search results pages.
 *
 * @package tm_polygon
 */
$tm_polygon_heading_image = Kirki::get_option( 'tm-polygon', 'page_bg_image' );
$tm_polygon_layout        = Kirki::get_option( 'tm-polygon', 'search_layout' );
get_header(); ?>
	<header class="big-title" style="background-image: url('<?php echo esc_url( $tm_polygon_heading_image ); ?>')">
		<div class="container">
			<div class="row middle">
				<h1 class="entry-title col-md-8"><?php printf( __( 'Search Results for: %s', 'tm-polygon' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php if ( function_exists( 'tm_bread_crumb' ) ) { ?>
					<div class="breadcrumb col-md-4 end">
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
				<main class="content">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content', 'blog' ); ?>
						<?php endwhile; // end of the loop. ?>
						<?php tm_polygon_paging_nav(); ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</main>
			</div>
			<?php if ( $tm_polygon_layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>