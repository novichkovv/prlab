<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package tm_polygon
 */
$tm_polygon_layout        = Kirki::get_option( 'tm-polygon', 'site_layout' );
$tm_polygon_heading_image = Kirki::get_option( 'tm-polygon', 'page_bg_image' );
get_header(); ?>
<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_polygon_heading_image ); ?>')">
	<div class="container">
		<h1 class="entry-title" itemprop="headline"><?php echo esc_html__( 'Blog', 'tm-polygon' ) ?></h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php if ( $tm_polygon_layout == 'sidebar-content' ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
		<?php if ( $tm_polygon_layout == 'sidebar-content' || $tm_polygon_layout == 'content-sidebar' ) { ?>
			<?php $class = 'content-contain col-md-9'; ?>
		<?php } else { ?>
			<?php $class = 'col-md-12'; ?>
		<?php } ?>
		<div class="<?php echo esc_attr( $class ); ?>">
			<main class="content" role="main">
				<?php if ( have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'index' );
						?>
					<?php endwhile; ?>
					<?php tm_polygon_paging_nav(); ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</main>
		</div>
		<?php if ( $tm_polygon_layout == 'content-sidebar' ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
	</div>
</div>

<?php get_footer(); ?>
