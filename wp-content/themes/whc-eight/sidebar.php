<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whc-eight
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'map-1' ); ?>
</aside><!-- #map -->

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'contact-1' ); ?>
</aside><!-- #contact -->

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->
