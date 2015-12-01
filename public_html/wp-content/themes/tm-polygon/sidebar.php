<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package tm_polygon
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<?php tha_sidebars_before(); ?>
<div class="sidebar-contain col-md-3">
	<aside class="sidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
		<?php tha_sidebar_top(); ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php tha_sidebar_bottom(); ?>
	</aside>
</div>
<?php tha_sidebars_after(); ?>