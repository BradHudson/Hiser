<!-- Carousel
================================================== -->
<?php if (get_theme_mod ( 'themeslug_change_to_slider') == 'value1'  ) : ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
<!--
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
-->
      <div class="carousel-inner" role="listbox">
	      
	    <!-- SLIDE 1 -->
	    <?php if (get_theme_mod ( 'themeslug_hide_slide1') == 'value2'  ) : ?>			
			<div class="item slide1 active check-bg">
	          <div class="container">
		          							

	            <div class="carousel-caption" data-0="opacity: 1;" data-300="opacity: 0">
		            <div class="row text-center">
								<div class="">
									<div class="carousel-box">
	              <h1><?php echo get_theme_mod( 'themeslug_slide1_title' ); ?></h1>
									</div>
	            </div>
								</div>
	            </div>
	          </div>
	        </div>
        <?php endif; ?>
        
        <!-- SLIDE 2 -->
	    <?php if (get_theme_mod ( 'themeslug_hide_slide2') == 'value2'  ) : ?>			
			<div class="item slide2 check-bg">
	          <div class="container">
	            <div class="carousel-caption" data-0="opacity: 1;" data-300="opacity: 0">
	              		            <div class="row text-center">
								<div class="">
									<div class="carousel-box">

	              <h1><?php echo get_theme_mod( 'themeslug_slide2_title' ); ?></h1>
									</div>
								</div>
	              		            </div>
	            </div>
	          </div>
	        </div>
        <?php endif; ?>
        
        <!-- SLIDE 3 -->
	    <?php if (get_theme_mod ( 'themeslug_hide_slide3') == 'value2'  ) : ?>
			<div class="item slide3 check-bg">
	          <div class="container">
	            <div class="carousel-caption" data-0="opacity: 1;" data-300="opacity: 0">
		            	              		            <div class="row text-center">
								<div class="">
									<div class="carousel-box">

	              <h1><?php echo get_theme_mod( 'themeslug_slide3_title' ); ?></h1>
									</div>
								</div>
		            	              		            </div>
	            </div>
	          </div>
	        </div>
        <?php endif; ?>
        
        <!-- SLIDE 4 -->
	    <?php if (get_theme_mod ( 'themeslug_hide_slide4') == 'value2'  ) : ?>
			<div class="item slide4 check-bg">
	          <div class="container">
	            <div class="carousel-caption" data-0="opacity: 1;" data-300="opacity: 0">
	              <h1><?php echo get_theme_mod( 'themeslug_slide4_title' ); ?></h1><br />
	              <p><?php echo get_theme_mod( 'themeslug_slide4_descr' ); ?></p><br />
	              <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod( 'themeslug_slide4_link' ); ?>" role="button"><?php echo get_theme_mod( 'themeslug_slide4_button' ); ?></a></p>
	            </div>
	          </div>
	        </div>
        <?php endif; ?>

        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<?php else : ?>

	<div id="myCarousel" class="carousel slide">
		<div class="container">
			<div class="carousel-inner">	
				
				<div class="item active static-feature">
					<div class="carousel-caption">
							<div class="row text-center">
								<div class="col-sm-offset-2 col-sm-9">
									<div class="carousel-box-wrapper">
									<div class="carousel-box">
										<p class="hidden-xs">•••••••••••••• WELCOME TO ••••••••••••••</p>
									<h1>CONDOR HOSPITALITY TRUST</h1>
									<p class="hidden-xs"> A NEW DIRECTION FOR GROWTH</p>
								</div>
								</div>
								</div>
							</div><!-- /.row -->
		            </div>
		        </div>
		      </div>
	      
	  <?php /* get_template_part('header-form'); */ ?>
		</div><!-- /.container -->   
	</div><!-- /.carousel -->

<?php endif; ?>