<?php
/**
 * Template part for displaying single posts.
 *
 * @package tm_polygon
 */
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

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
					<span class="categories-links">
						<i class="fa fa-clock-o"></i>
						<?php the_date() ?></span>
					<span class="author vcard"><i
							class="fa fa-user"></i> <?php echo get_the_author(); ?></span>
					<span class="categories-links"><i
							class="fa fa-folder-open"></i><?php echo get_the_category_list( esc_html__( ', ', 'tm-polygon' ), '', get_the_ID() ) ?> </span>
					<span class="comments-counts"><i
							class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
				<span><?php echo getPostLikeLink( get_the_ID() ); ?></span>
			</div><!-- .entry-meta -->
			<hr />
			<?php the_title( sprintf( '<h3 class="entry-title">', esc_url( get_permalink() ) ), '</h3>' ); ?>

		<?php endif; ?>

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
	<div class="entry-footer">
		<div class="row middle">
			<div class="col-sm-12">
				<div class="tags">
					<?php the_tags( '<h5>Tags</h5> ', ' ' ); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="share">
					<h5><?php echo esc_html__( 'Share', 'tm-polygon' ); ?></h5>
					<span><a target="_blank"
					         href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i
								class="fa fa-facebook"></i></a></span>
					<span><a target="_blank"
					         href="http://twitter.com/share?text=<?php echo urlencode( the_title() ); ?>&url=<?php echo urlencode( the_permalink() ); ?>&via=twitter&related=<?php echo urlencode( "coderplus:Wordpress Tips, jQuery and more" ); ?>"><i
								class="fa fa-twitter"></i></a></span>
					<span><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i
								class="fa fa-google-plus"></i></a></span>
				</div>
			</div>
		</div>
	</div>

	<div class="author-info">
		<div class="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), '100x100', null, get_the_author_meta( 'display_name' ) ); ?>
		</div>
		<div class="author-desc">
			<div class="author-name">
				<a href="<?php echo esc_attr( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
					<?php echo esc_html( get_the_author_meta( 'display_name' ) ) ?>
				</a>
			</div>
			<div class="author-text">
				<?php echo esc_html( get_the_author_meta( 'description' ) ) ?>
			</div>
			<div class="author-email">
				<a class="link" href="mailto:<?php echo esc_attr( get_the_author_meta( 'user_email' ) ) ?>">
					<?php echo esc_html( get_the_author_meta( 'user_email' ) ) ?>
				</a>
			</div>
		</div>
	</div>
