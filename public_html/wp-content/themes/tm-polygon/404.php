<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package tm_polygon
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="row middle">
			<div class="xs-col-12 center">
				<section class="error-404 not-found">

					<h5><?php esc_html_e( '404 error', 'tm-polygon' ); ?></h5>
					<header class="page-header">
						<h1 class="page-title">
							<?php echo wp_kses( __( '<b class="pri-color">Page</b> not found', 'tm-polygon' ), array( 'b' => array( 'class' => array() ) ) ); ?>
						</h1>
					</header>
					<!-- .page-header -->

					<div class="page-content">

						<a href="<?php echo esc_url( home_url( '/' ) ) ?>"
						   class="btn"><?php esc_html_e( 'Back to homepage', 'tm-polygon' ); ?></a>

					</div>
					<!-- .page-content -->

				</section>
				<!-- .error-404 -->
			</div>
		</div>

	</main>
	<!-- #main -->
</div><!-- #primary -->
<?php if ( Kirki::get_option( 'tm-polygon', 'copyright_layout_enable' ) == 1 ) { ?>
	<div class="copyright">
		<div class="container">
			<div class="row middle">
				<?php
				$social_cl = 'col-md-6 right';
				$text_cl   = 'col-md-6 left';
				if ( Kirki::get_option( 'tm-polygon', 'copyright_layout_clear' ) == 'left' ) {
					$social_cl = 'col-md-6 right';
					$text_cl   = 'col-md-6 left first';
				} else if ( Kirki::get_option( 'tm-polygon', 'copyright_layout_clear' ) == 'both' ) {
					$social_cl = 'col-md-12 center';
					$text_cl   = 'col-md-12 center';
				}
				?>
				<div class="<?php echo esc_attr( $text_cl ) ?>">
					<?php echo html_entity_decode( Kirki::get_option( 'tm-polygon', 'copyright_layout_text' ) ); ?>
				</div>
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
			</div>
		</div>
	</div><!-- .copyright -->
<?php } ?>
</div><!-- #page -->
<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
