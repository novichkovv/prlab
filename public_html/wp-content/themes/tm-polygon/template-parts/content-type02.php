<?php
/**
 * @package tm_polygon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-md-6' ); ?>>

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-thumb">
			<?php the_post_thumbnail( 'tm-polygon-post-thumb' ); ?>
		</div>
	<?php } ?>
	<!-- .entry-header -->
	<div class="postcontent-gird">
		<div class="postcontent-gird-content">
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
						<span class="categories-links"><i
								class="fa fa-folder-open"></i> <?php echo get_the_category_list( esc_html__( ', ', 'tm-polygon' ) ) ?> </span>
						<span class="author vcard"><i
								class="fa fa-user"></i> <?php echo get_the_author(); ?></span>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			<header class="entry-header">
				<?php the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
			</header>
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>
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