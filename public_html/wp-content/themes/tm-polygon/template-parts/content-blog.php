<?php
/**
 * @package tm_polygon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-table">
		<div class="post-table-sub-content">
			<div class="dates">
				<span class="date"><?php the_time( 'd' ); ?></span>
				<span class="month"><?php the_time( 'M' ); ?></span>
				<span class="year"><?php the_time( 'Y' ); ?></span>
			</div>
		</div>
		<div class="post-table-content">
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="post-thumb">
					<?php the_post_thumbnail( 'tm-polygon-post-thumb' ); ?>
				</div>
			<?php } ?>
			<!-- .entry-header -->
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<span class="categories-links"><i
							class="fa fa-folder-open"></i> <?php echo get_the_category_list( esc_html__( ', ', 'tm-polygon' ) ) ?> </span>
					<span class="author vcard"><i
							class="fa fa-user"></i> <?php echo get_the_author(); ?></span>
					<span class="comments-counts"><i
							class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			<header class="entry-header">
				<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'tm-polygon' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'tm-polygon' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
				?>
			</div>
			<!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-## -->