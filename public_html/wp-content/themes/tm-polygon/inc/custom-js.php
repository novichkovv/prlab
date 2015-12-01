<?php function tm_polygon_js_custom_code() { ?>
	<?php if ( Kirki::get_option( 'tm-polygon', 'custom_js_enable' ) == 1 ): ?>
		<?php echo html_entity_decode( Kirki::get_option( 'tm-polygon', 'custom_js' ) ); ?>
	<?php endif ?>
	<?php if ( Kirki::get_option( 'tm-polygon', 'nav_sticky_enable' ) == 1 && has_nav_menu( 'primary' ) ): ?>
		<?php if ( Kirki::get_option( 'tm-polygon', 'header_type' ) == 'header02' || Kirki::get_option( 'tm-polygon', 'header_type' ) == 'header04' ) { ?>
			<script>
				jQuery(document).ready(function ($) {
					$(".sticky-menu").headroom(
						{
							offset: $(".site-top").innerHeight(),
						}
					);
				});
			</script>
		<?php } else { ?>
			<script>
				jQuery(document).ready(function ($) {
					$(".sticky-menu").headroom(
						{
							offset: 0
						}
					);
				});
			</script>
		<?php } ?>
	<?php endif ?>
<?php }

add_action( 'wp_footer', 'tm_polygon_js_custom_code' );
