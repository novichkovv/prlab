<?php
/**
 * Shortcode attributes
 * @var $type
 * @var $number
 * @var $show_title
 * @var $show_excerpt
 * @var $show_meta
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Recentposts
 */
$output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$args = array( 'post_type' => 'post', 'posts_per_page' => $number );
$loop = new WP_Query( $args );
?>
<?php if ( $type == 'type_2' ) { ?>
	<div class="recent-posts type_2">
		<div class="row">
			<?php while ( $loop->have_posts() ) : $loop->the_post();
				$meta = get_post_meta( get_the_ID() ); ?>
				<div class="col-md-4">
					<div>
						<div class="post-thumb">
							<div class="dates">
								<span class="month"><?php the_time( 'F' ); ?></span>
								<span class="date"><?php the_time( 'd' ); ?></span>
								<span class="year"><?php the_time( 'Y' ); ?></span>
							</div>
							<?php if ( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail( 'tm-polygon-medium-thumb' ); ?>
							<?php } else { ?>
								<img
									src="https://placeholdit.imgix.net/~text?txtsize=35&bg=111111&txtclr=ffffff&txt=370%C3%97220&w=370&h=220"
									alt="thumbnail">
							<?php } ?>
						</div>
						<?php if ( $show_title ): ?>
							<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php endif ?>
						<?php if ( $show_meta ): ?>
							<div class="entry-meta">
								<span class="author vcard"><i
										class="fa fa-user"></i> <?php echo esc_html__( 'Posted by ', 'tm-polygon' ) . get_the_author(); ?></span>
								<span class="categories-links"><i
										class="fa fa-folder"></i> <?php echo esc_html__( 'In ', 'tm-polygon' ) . get_the_category_list( esc_html__( ', ', 'tm-polygon' ) ) ?> </span>
								<span class="comments-counts"><i
										class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
							</div><!-- .entry-meta -->
						<?php endif ?>
						<?php if ( $show_excerpt ): ?>
							<div class="entry-excerpt"><?php the_excerpt(); ?></div>
						<?php endif ?>
					</div>
				</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
		</div>
	</div>
<?php } else { ?>
	<div class="recent-posts type_1">
		<?php while ( $loop->have_posts() ) : $loop->the_post();
			$meta = get_post_meta( get_the_ID() ); ?>
			<div class="recent-posts__item row">
				<div class="recent-posts__thumb col-md-6">
					<a href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<?php the_post_thumbnail( 'tm-polygon-medium-thumb' ); ?>
						<?php } else { ?>
							<img
								src="https://placeholdit.imgix.net/~text?txtsize=20&bg=111111&txtclr=ffffff&txt=600%C3%9790&w=600&h=385"
								alt="thumbnail">
						<?php } ?>
					</a>
				</div>

				<div class="recent-posts-desc col-md-6">
					<?php if ( $show_meta ): ?>
						<div class="dates">
							<span class="date"><?php the_time( 'd' ); ?></span>
							<span class="month"><?php the_time( 'M' ); ?></span>
							<span class="year"><?php the_time( 'Y' ); ?></span>
						</div>

						<div class="post-meta">
							<span class="post-com">
								<i class="fa fa-folder-open"></i> <?php the_category(', '); ?>
							</span>
							<span class="author">
								<i class="fa fa-user"></i> <?php the_author(); ?>
							</span>
						</div>
					<?php endif ?>
					<?php if ( $show_title ): ?>
						<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					<?php endif ?>
					<?php if ( $show_excerpt ): ?>
						<div class="entry-excerpt"><?php the_excerpt(); ?></div>
					<?php endif ?>
					<a class="btn" href="<?php echo esc_url( get_the_permalink() ) ?>"><?php esc_html_e( 'Read more' , 'tm-polygon' ) ?></a>
				</div>
			</div>
		<?php endwhile;
		wp_reset_postdata(); ?>
	</div>
<?php } ?>