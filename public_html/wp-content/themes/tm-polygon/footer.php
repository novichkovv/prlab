<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tm_polygon
 */
?>
		</div> <!-- #content -->
		<?php if ( Kirki::get_option( 'tm-polygon', 'footer_layout_enable' ) ) { ?>
			<?php tha_content_bottom(); ?>

			<?php tha_content_after(); ?>
			<?php if ( is_active_sidebar( 'footer' ) ) { ?>
				<?php tha_footer_before(); ?>
				<footer class="site-footer">
					<?php tha_footer_top(); ?>
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<?php dynamic_sidebar( 'footer' ); ?>
							</div>
							<div class="col-md-3">
								<?php dynamic_sidebar( 'footer2' ); ?>
							</div>
							<div class="col-md-3">
								<?php dynamic_sidebar( 'footer3' ); ?>
							</div>
							<div class="col-md-3">
								<?php dynamic_sidebar( 'footer4' ); ?>
							</div>
						</div>
					</div>
					<?php tha_footer_bottom(); ?>
				</footer><!-- .site-footer -->
				<?php tha_footer_after(); ?>
			<?php } ?>
		<?php } ?>
		<?php if ( Kirki::get_option( 'tm-polygon', 'copyright_layout_enable' ) == 1 ) { ?>
			<div class="copyright">
				<div class="container">
					<div class="row middle">
						<?php
							$social_cl = 'col-md-6 left';
							$text_cl = 'col-md-6 right';
							if ( Kirki::get_option( 'tm-polygon', 'copyright_layout_clear' ) == 'left' ) {
								$social_cl = 'col-md-6 right';
								$text_cl = 'col-md-6 left first';
							} else if ( Kirki::get_option( 'tm-polygon', 'copyright_layout_clear' ) == 'both' ) {
								$social_cl = 'col-md-12 center';
								$text_cl = 'col-md-12 center';
							}
						?>
						<?php if ( Kirki::get_option( 'tm-polygon', 'copyright_social_menu_enable' ) == 1 ) { ?>
						<div class="<?php echo esc_attr( $social_cl ) ?>">
							<div class="social">
								<?php wp_nav_menu( array(
									'theme_location'  => 'social',
									'menu_id'         => 'social-menu',
									'container_class' => 'social-menu',
									'fallback_cb'     => false
								) ); ?>
							</div>
						</div>
						<?php } ?>
						<div class="<?php echo esc_attr( $text_cl ) ?>">
							<?php echo html_entity_decode( Kirki::get_option( 'tm-polygon', 'copyright_layout_text' ) ); ?>
						</div>
					</div>
				</div>
			</div><!-- .copyright -->
		<?php } ?>
	</div><!-- #page -->
	<?php tha_body_bottom(); ?>
	<?php wp_footer(); ?>
</body>
</html>