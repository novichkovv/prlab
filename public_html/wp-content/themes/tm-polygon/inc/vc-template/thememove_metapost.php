<?php
/**
 * Shortcode attributes
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Metapost
 */
$output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( shortcode_atts( array(
	'el_class' => '',
), $atts ) );

?>
<?php if ( 'post' == get_post_type() ) : ?>
	<div class="entry-meta">
		<span class="categories-links">
			<i class="fa fa-clock-o"></i>
			<?php the_date() ?></span>
		<span class="author vcard"><i
				class="fa fa-user"></i> <?php echo get_the_author(); ?></span>
		<span class="categories-links"><i
				class="fa fa-folder-open"></i> <?php the_category( ', ' ); ?> </span>
		<span class="comments-counts"><i
				class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
		<span><?php echo getPostLikeLink( get_the_ID() ); ?></span>
	</div><!-- .entry-meta -->
	<hr />
	<?php the_title( sprintf( '<h3 class="entry-title">', esc_url( get_permalink() ) ), '</h3>' ); ?>

<?php endif; ?>