<?php
$tm_polygon_container_class      = '';
if ( Kirki::get_option( 'tm-polygon', 'nav_boxed_enable' ) == 1 ) {
	$tm_polygon_container_class = 'nav_boxed';
}
?>

<?php tha_header_before(); ?>
<header class="site-header header04">
	<div class="site-top">
		<div class="container">
			<?php if ( Kirki::get_option( 'tm-polygon', 'top_layout_enable' ) == 1 ) { ?>
				<div class="row middle">
					<div class="col-md-2 col-xs-10 site-branding">
						<?php
						$logo        = Kirki::get_option( 'tm-polygon', 'site_logo' );
						$logo_retina = Kirki::get_option( 'tm-polygon', 'site_logo_retina' );
						if ( $logo ) { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img
									src="<?php echo esc_url( $logo ); ?>" <?php if ( $logo_retina ) { ?> srcset="<?php echo esc_url( $logo_retina ); ?> 2x" <?php } ?>
									alt="<?php bloginfo( 'name' ); ?>"/>
							</a>
						<?php } else { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php } ?>
					</div>
					<div class="col-xs-2 hidden-md hidden-lg end">
						<i id="open-left" class="fa fa-navicon"></i>
					</div>
					<div class="col-md-10 end-md end-lg hidden-xs hidden-sm">
						<?php wp_nav_menu( array( 'theme_location'  => 'social',
						                          'menu_id'         => 'social-menu-top',
						                          'container_class' => 'social-menu top-has-link',
						                          'fallback_cb'     => false
						) ); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="sticky-menu">
		<div class="container<?php echo esc_attr( ' ' . $tm_polygon_container_class ) ?>">
		<div class="row middle-xs middle-sm">

			<div class="col-md-12 hidden-xs hidden-sm">
				<nav id="site-navigation" class="main-navigation hidden-xs hidden-sm">
					<div>
						<?php if ( Kirki::get_option( 'tm-polygon', 'header_layout_search_enable' ) == 1 ) { ?>
							<div class="search-cart hidden-xs hidden-sm pull-right">
								<div class="search-box">
									<?php get_search_form(); ?>
									<i class="pe-7s-search"></i>
								</div>
							</div>
						<?php } ?>
						<?php if ( class_exists( 'WooCommerce' ) && Kirki::get_option( 'tm-polygon', 'header_layout_mini_cart_enable' ) == 1 ) { ?>
							<div class="search-cart hidden-xs hidden-sm pull-right">
								<div class="mini-cart">
									<?php echo tm_polygon_minicart(); ?>
									<div class="widget_shopping_cart_content"></div>
								</div>
							</div>
						<?php } ?>

						<?php if ( class_exists( 'TM_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'menu_id'         => 'primary-menu',
								'container_class' => 'primary-menu pull-left',
								'walker'          => new TM_Walker_Nav_Menu
							) );
						} else {
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'menu_id'         => 'primary-menu',
								'container_class' => 'primary-menu pull-left'
							) );
						} ?>
					</div>
				</nav>
				<!-- #site-navigation -->
			</div>
		</div>
	</div>
	</div>
</header><!-- .site-header -->
<?php tha_header_after(); ?>
