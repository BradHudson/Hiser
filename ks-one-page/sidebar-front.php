<?php
/**
 * The sidebar containing the front page widget areas
 *
 * If no active widgets are in either sidebar, hide them completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>
<div class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="first front-widgets">
		<div class="footer-inner">
			<div class="row">
				<div class="col-sm-4">
					<aside class="widget widget_text widget_about">
						<h3 class="widget-title">About <?php bloginfo('name'); ?></h3>
						<p><?php echo get_theme_mod( 'themeslug_about-text' ); ?></p>
						
						<span <?php echo ( get_theme_mod( 'themeslug_gplus-off' ) ) ? "style='display:none;'" : "" ?>>
							<hr />
							<p><a href="<?php echo get_theme_mod( 'themeslug_gplus', '#' ); ?>" target="_blank">Visit <?php bloginfo('name'); ?> on Google+</a></p>
						</span>
					</aside>
				</div><!-- /.col-sm-4 -->
				
				<div class="col-sm-4 text-center">
					<aside class="widget widget_text widget_contact">
						<h3 class="widget-title">Location</h3>
						<?php echo get_theme_mod( 'themeslug_address' ); ?><br />
						<p><?php echo get_theme_mod( 'themeslug_hours' ); ?></p>
						<?php echo get_theme_mod( 'themeslug_gmap' ); ?>
					</aside>
				</div><!-- /.col4 -->
				
				<div class="col-sm-4 text-right">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div><!-- /.col-sm-4 -->
			</div><!-- end row -->
		</div><!-- end footer-inner -->
	</div><!-- .first -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="second front-widgets">
		<div class="footer-inner">
			<div class="row">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div><!-- end row -->
		</div><!-- end footer-inner -->
	</div><!-- .second -->
	<?php endif; ?>
	
</div><!-- #secondary -->