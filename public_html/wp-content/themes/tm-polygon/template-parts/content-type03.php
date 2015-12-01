<?php
/**
 * @package tm_polygon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="recent-posts__item row">
		<div class="recent-posts__thumb col-md-6">
			<a href="<?php the_permalink() ?>">
				<?php if ( has_post_thumbnail() ) { ?>
					<?php the_post_thumbnail( 'tm-polygon-medium-thumb' ); ?>
				<?php } else { ?>
					<img
						src="https://placeholdit.imgix.net/~text?txtsize=20&bg=ca1f26&txtclr=ffffff&txt=600%C3%9790&w=600&h=385"
						alt="thumbnail">
				<?php } ?>
			</a>
		</div>

		<div class="recent-posts-desc col-md-6">
			<div class="dates">
				<span class="date"><?php the_time( 'd' ); ?></span>
				<span class="month"><?php the_time( 'M' ); ?></span>
				<span class="year"><?php the_time( 'Y' ); ?></span>
			</div>

			<div class="post-meta">
							<span class="post-com">
								<i class="fa fa-folder-open"></i> <?php the_category( ', ' ); ?>
							</span>
							<span class="author">
								<i class="fa fa-user"></i> <?php the_author(); ?>
							</span>
			</div>
			<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

			<div class="entry-excerpt"><?php the_excerpt(); ?></div>
			<a class="btn" href="<?php esc_url( get_the_permalink() ) ?>"><?php esc_html_e( 'Read more', 'tm-polygon' ) ?></a>
		</div>
	</div>
</article><!-- #post-## -->