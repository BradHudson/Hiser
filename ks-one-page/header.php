<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>

<script src="https://use.fontawesome.com/f122c5b326.js"></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src="https://use.typekit.net/asi8mtq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php get_template_part('styles'); ?>

<?php if (is_ios()) : ?>
	<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ios.css" rel="stylesheet" media="screen">
<?php endif; ?>
<?php if (is_mobile()) : ?>
	<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/mobile.css" rel="stylesheet" media="screen">
<?php endif; ?>

<!-- Animations -->
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/animate.css" rel="stylesheet" media="screen">
<meta name="google-site-verification" content="zvpwSosDqxMz6DqoImmA33MVlQzyPgjimBJyZfoiVy8" />


</head>

<body <?php body_class(); ?>>

<?php if (get_theme_mod ( 'themeslug_hide_slide_out_form') == 'value2'  ) : ?>
	<?php get_template_part('popout'); ?>
<?php endif; ?>

<?php if (get_theme_mod ( 'themeslug_hide_appointment_tab') == 'value2'  ) : ?>	
	<a href="#call-to-action" class="anchored hidden-xs"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/appointment-button.png" alt="" id="appointment-button" /></a>
<?php endif; ?>


<div id="main-container">
<div id="page" class="hfeed site">

	<div id="text-sizer">
		Text Resize<br />
		<span class="text-large">A</span>
		<span class="text-med">A</span>
		<span class="text-small">A</span>
	</div>
	
	<div id="top-bar" class="text-center">
		<div class="container">
			<a href="<?php bloginfo('url'); ?>/7-reasons-to-choose-hiser-orthodontics-2-0-for-your-childs-orthodontic-needs-hint-were-unique/">7 Reasons to Choose Hiser Orthodontics 2.0 for Your Child's Orthodontic Needs!</a>
		</div>
	</div>
	
<!-- NAVBAR
================================================== -->
  <div class=" navbar-wrapper">
	  
	<nav id="header" class="navbar navbar-static-top">
		<div class="container">
            <div class="navbar-header">
	            <div class="row">
		            <div class="col-xs-4">
			            <button type="button" class="nav-toggle collapsed navbar-btn btn-default btn-lg visible-xs" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-bars"></i>
						</button>
		            </div>
		           	<div class="col-xs-4">
						  
						  <!-- Mobile logo -->
						  <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_theme_mod( 'themeslug_mobile_logo' ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' id="logo" class="visible-xs animated fadeInDown"></a>
						  
		              </div><!-- /.col2 -->
		              <div class="col-sm-8 text-right">
			                <!-- empty column, above the nav items can go here -->
		              </div><!-- /.col8 -->
	              </div><!-- ./row -->
	            </div><!-- /.navbar-header -->
	              
	            <div id="navbar" class="navbar-collapse collapse">
						<div class="col-sm-2 animated fadeInDown">
							  
						  
						  	<?php if (is_front_page()) : ?>
							
							  	<!-- Desktop logo -->
				              <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
									<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_theme_mod( 'themeslug_logo' ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' id="logo" class="hidden-xs"></a>
							  <?php else : ?>
									<a href="<?php bloginfo('url'); ?>" id="logo" class="brand hidden-xs"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
							  <?php endif; ?>
							
							<?php else : ?>
							
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php bloginfo( 'stylesheet_directory' ); ?>/images/hiser-horizontal-logo.png' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' id="logo" class="hidden-xs"></a>
							
							<?php endif; ?>
	
					</div><!-- /col2 -->
					<div class="col-sm-10">
						<?php /* wp_nav_menu( array('menu' => 'Main', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' )); */ ?>
					    <ul class="nav navbar-nav">
						    <a class="btn btn-primary animated fadeInDown scrollTo" href="<?php bloginfo('url'); ?>/meet-dr-hiser">Meet Dr. Hiser</a>
						    <a class="btn btn-primary animated fadeInDown scrollTo" href="#faq">FAQ</a>
						    <a class="btn btn-primary animated fadeInDown scrollTo" href="#call-to-action">Contact</a>
						    <a class="btn btn-info animated fadeInDown" href="tel:<?php echo get_theme_mod( 'themeslug_phone' ); ?>"><?php echo get_theme_mod( 'themeslug_phone' ); ?></a>
						</ul>
					</div><!-- /col10 -->
            </div><!-- /navbar-header -->
		</div><!-- /.container -->
    </nav>
	
  </div><!-- /.navbar-wrapper -->


<?php if (is_front_page()) : ?>
	<?php get_template_part('feature-hero'); ?>
<?php endif; ?>

<div class="site-content"> 
	<div class="main-content">
	    
		<div id="main" class="wrapper">