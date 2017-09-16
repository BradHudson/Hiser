<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		</div><!-- #main .wrapper -->

	 </div><!-- /.main-content -->
	
</div><!-- /.container -->
	
	
	<?php if (!is_page('contact-us')) : ?>
		<?php get_template_part('call-to-action'); ?>
	<?php endif; ?>		

<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(7725);} ?>	
	
	<footer id="colophon" role="contentinfo" class="dark-blue">
		<div class="container">
			<?php /*get_sidebar( 'front' ); */ ?>
			
			<div class="text-center">
				<h3><i class="fa fa-map-marker"></i> Location</h3>
				<p><?php echo get_theme_mod( 'themeslug_address' ); ?></p>
				
				<h3><i class="fa fa-clock-o"></i> Business Hours</h3>
				<p><?php echo get_theme_mod( 'themeslug_hours' ); ?></p>
				<hr />
				
				<?php get_template_part('social'); ?>
			</div>
			
			<hr />
			
			<div class="row">
				<div class="col-sm-8">
					<p><a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a>
				</div><!-- /.col-sm-4 -->
	
				<div class="col-sm-4 text-right">
					
				</div><!-- /.col-sm-4 -->
			</div><!-- /.row -->
			
		</div><!-- /.container -->
			
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- /#main-container -->

<?php wp_footer(); ?>

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
	jQuery('.dropdown-menu').find('form').click(function (e) {
    e.stopPropagation();
  });
</script>

<script>
	
	jQuery('.scrollTo').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = jQuery(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             jQuery('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
	
</script>

<script>
	jQuery(".text-large").click(function(){
	    jQuery("p").addClass("p-large").removeClass('p-med p-small');
	});
	jQuery(".text-med").click(function(){
	    jQuery("p").addClass("p-med").removeClass('p-large p-small');
	});
	jQuery(".text-small").click(function(){
	    jQuery("p").addClass("p-small").removeClass('p-large p-med');
	});
</script>

<?php if (!is_mobile()) : ?>
	
	<!-- Close Callout -->
	<script>
		jQuery(function() {                    
		  jQuery(".close-callout").click(function() {
		    jQuery('#bottom-call-out').addClass("hide");
		  });
		  jQuery(".close-callout-right").click(function() {
		    jQuery('#bottom-call-out-right').addClass("hide");
		  });
		});
	</script>
<?php endif; ?>

<?php if (is_single()) : ?>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/rrssb.css">
	<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/rrssb.min.js"></script>
<?php endif; ?>

<!-- Slide Out Form -->
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/popout.js"></script>

<!-- Support Slide -->
<script>
	jQuery(document).ready(function(){
	    jQuery(".btn-support").click(function(){
	        jQuery("#support-slide").toggleClass("support-open");
	    });
	});
</script>

<!--[if lt IE 9]>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/respond.js" type="text/javascript"></script>
<![endif]-->
</body>
</html>