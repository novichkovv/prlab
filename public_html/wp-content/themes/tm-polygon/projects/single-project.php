<?php
/**
 * The template for displaying all project-single posts.
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
				<?php the_title( '<h1 class="entry-title col-md-6" itemprop="headline">', '</h1>' ); ?>
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
			<?php $class = 'col-md-12'; ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<div class="content">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope"
						         itemtype="http://schema.org/CreativeWork">
							<div class="entry-content">
								<?php the_content(); ?>
								<?php
								// the_post_navigation
								$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
								$next     = get_adjacent_post( false, '', false );

								if ( ! $next && ! $previous ) {
									return;
								}
								?>
								<nav class="navigation post-navigation">
									<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'tm-polygon' ); ?></h2>

									<div class="nav-links">
										<?php previous_post_link( '<div class="nav-previous">%link</div>', '%title' ); ?>
										<a class="portfolio-home-btn"
										   href="<?php echo esc_url( home_url( '/' ) ) ?>"></a>
										<?php next_post_link( '<div class="nav-next">%link</div>', '%title' ); ?>
									</div>
									<!-- .nav-links -->
								</nav>
								<!-- .navigation -->
							</div>
							<!-- .entry-content -->
						</article><!-- #post-## -->
					<?php endwhile; // end of the loop. ?>

					<div class="related-projects">
						<h4 class="related-projects-title center"><?php esc_html_e('Related projects', 'tm-polygon') ?></h4>
						<div class="row">
							<?php
							$project_category = get_the_terms(get_the_ID(), 'project-category');
							if ( ! empty( $project_category ) ) {
								$args = array(
									'post_type'      => 'project',
									'posts_per_page' => 3,
									'project-category'        => $project_category[0]->slug,
									'post__not_in'   => array( get_the_ID() )
								);
								wp_reset_postdata();
								$loop = new WP_Query( $args );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post();
										{
							?>
											<div class="col-md-4 center">
												<?php if ( has_post_thumbnail() ) { ?>
													<a href="<?php the_permalink() ?>">
														<div class="project-thumb">
															<?php the_post_thumbnail( 'tm-polygon-related-thumb' ); ?>
														</div>
													</a>
												<?php } ?>
												<h5 class="project-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
												<span></span><?php echo get_post_meta( get_the_ID(), "eg-description", true ); ?></span>
											</div>
							<?php
										}
									endwhile;
								endif;
								wp_reset_postdata();
							}
							?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>