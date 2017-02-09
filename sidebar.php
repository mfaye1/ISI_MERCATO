<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ISI_MERCATO
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-4 col-t-12 row" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
<?php
if ( ! is_active_sidebar( 'Footer' ) ) {
	return;
}
?>

<aside id="Third" class="widget-area col-4 col-t-12 row" role="complementary">
	<?php dynamic_sidebar( 'Footer' ); ?>
</aside><!-- #secondary -->
