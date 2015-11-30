<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package tm_polygon
 */
$tm_polygon_heading_image = Kirki::get_option( 'tm-polygon', 'page_bg_image' );
$layout                 = Kirki::get_option( 'tm-polygon', 'archive_layout' );
get_header(); ?>
	<header class="big-title" style="background-image: url('<?php echo esc_url( $tm_polygon_heading_image ); ?>')">
		<div class="container">
			<?php the_archive_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<span class="entry-desc">
				<?php the_archive_description(); ?>
			</span>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<?php if ( $layout == 'sidebar-content' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
			<?php if ( $layout == 'sidebar-content' || $layout == 'content-sidebar' ) { ?>
				<?php $class = 'col-md-9'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<main class="content">
					<div class="row masonry postcontent-type02">
						<?php while ( have_posts() ) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'brick col-md-6' ); ?> itemscope="itemscope"
							         itemtype="http://schema.org/CreativeWork">
								<?php if ( has_post_thumbnail() ) { ?>
									<div class="post-thumb">
										<?php the_post_thumbnail( 'tm-polygon-post-thumb' ); ?>
									</div>
								<?php } ?>
								<!-- .entry-header -->
								<div class="postcontent-gird">
									<div class="postcontent-gird-content">
										<?php if ( 'project' == get_post_type() ) : ?>
											<div class="entry-meta">
												<span class="categories-links"><i
														class="fa fa-folder-open"></i> <?php echo get_the_term_list( get_the_ID(), 'project-category', '', esc_html__( ', ', 'tm-polygon' ) ) ?> </span>
												<span class="author vcard"><i
														class="fa fa-user"></i> <?php echo get_the_author(); ?></span>
											</div><!-- .entry-meta -->
										<?php endif; ?>
										<header class="entry-header">
											<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
										</header>
									</div>
									<div class="postcontent-gird-bottom">
										<span>
											<i class="fa fa-clock-o"></i>
											<?php the_date() ?>
										</span>
										<span class="comments-counts"><i
											class="fa fa-comment"></i> <?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
									</div>
									<!-- .entry-content -->
								</div>
							</article><!-- #post-## -->
							<?php
						endwhile;
						?>
					</div>

					<?php tm_polygon_paging_nav(); ?>
				</main>
			</div>
			<?php if ( $layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>