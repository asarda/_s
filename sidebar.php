<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area ">
	<div class="panel-block mb-4 p-0">
		<p class="control has-icons-left">
		<input class="input" type="text" placeholder="Search">
		<span class="icon is-left">
			<i class="fas fa-search" aria-hidden="true"></i>
		</span>
		</p>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
