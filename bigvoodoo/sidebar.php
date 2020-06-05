<?php
/** Sidebar
 * @package BigVoodoo
 **/

if ( ! is_active_sidebar( 'sidebarwidget' ) ) {
	return;
}
?>
<!--- ====sidebar===== --->
<aside class="widget-area">
	<?php dynamic_sidebar( 'sidebarwidget' ); ?>
</aside>
