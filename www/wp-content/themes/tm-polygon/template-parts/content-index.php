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
			<?php
			$tm_polygon_hide_featured_image = get_post_meta( get_the_ID(), "tm_polygon_hide_featured_image", true );
			?>
			<?php if ( has_post_format( 'gallery' ) ) { ?>
				<?php $gallery_images = get_post_meta( get_the_ID(), '_format_gallery_images', true ); ?>
				<?php $gallery_type = get_post_meta( get_the_ID(), '_format_gallery_type', true ); ?>
				<?php if ( $gallery_images ) { ?>
					<div class="post-img post-gallery<?php echo ' ' . esc_attr( $gallery_type ); ?>">
						<?php if ( 'masonry' == $gallery_type ) { ?>
							<div class="grid-thumb-sizer"></div><?php } ?>
						<?php foreach ( $gallery_images as $image ) { ?>
							<?php if ( 'masonry' == $gallery_type ) {
								$img = wp_get_attachment_image_src( $image, 'full-thumb' );
							} else {
								$img = wp_get_attachment_image_src( $image, 'single-thumb' );
							} ?>
							<?php $caption = get_post_field( 'post_excerpt', $image ); ?>
							<div <?php if ( 'masonry' == $gallery_type ) { ?> class="thumb-masonry-item" <?php } ?>>
								<img src="<?php echo esc_url( $img[0] ); ?>" alt="<?php echo ''; ?>"></div>
						<?php } ?>
					</div>
				<?php } ?>
			<?php } elseif ( has_post_format( 'video' ) ) { ?>
				<div class="post-video">
					<?php $video = get_post_meta( get_the_ID(), '_format_video_embed', true ); ?>
					<?php if ( wp_oembed_get( $video ) ) { ?>
						<?php echo wp_oembed_get( $video ); ?>
					<?php } else { ?>
						<?php echo "" . $video; ?>
					<?php } ?>
				</div>
			<?php } elseif ( has_post_format( 'audio' ) ) { ?>
				<div class="post-audio">
					<?php $audio = get_post_meta( $post->ID, '_format_audio_embed', true ); ?>
					<?php if ( wp_oembed_get( $audio ) ) { ?>
						<?php echo wp_oembed_get( $audio ); ?>
					<?php } else { ?>
						<?php echo "" . $audio; ?>
					<?php } ?>
				</div>
			<?php } elseif ( has_post_format( 'quote' ) ) { ?>
				<?php $source_name = get_post_meta( $post->ID, '_format_quote_source_name', true ); ?>
				<?php $url = get_post_meta( $post->ID, '_format_quote_source_url', true ); ?>
				<?php $quote = get_post_meta( $post->ID, '_format_quote_text', true ); ?>
				<?php if ( $quote ) { ?>
					<div class="post-quote">
						<h2><?php echo esc_attr( $quote ); ?></h2>

						<div class="source-name">
							<?php if ( $source_name ) { ?>
								<?php if ( $url ) { ?>
									<a href="<?php echo esc_url( $url ); ?>" target="_blank"><?php echo esc_attr( $source_name ); ?></a>
								<?php } else { ?>
									<span><?php echo esc_attr( $source_name ); ?></span>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			<?php } else { ?>
				<?php if ( has_post_thumbnail() && $tm_polygon_hide_featured_image != 'on' ) { ?>
					<div class="post-thumb">
						<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'tm-polygon-post-thumb' ); ?></a>
					</div>
				<?php } ?>
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