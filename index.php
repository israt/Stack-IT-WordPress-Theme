<?php

/************

 *  This is Home page main Template file *

 *  Template Name: HomePage

 ***********/

get_header(); ?>

<!--banner section starts...-->
    <section class="banner_area">
                	<!--carousel starts here.......-->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                    
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox"> 
					  <?php
			$args = array(
			'post_type' => 'slide',
			  'orderby' => 'id',
			  'order' => 'ASC',

			  );
			  
			  $query = new WP_Query($args);

		$first=1;

	if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
			  if($first==1)
			  {
							  ?>
              <div class="item active">
              <?php } else
			  {
				  ?>
                  <div class="item">
                  <?php
			  }
			  
			  $first++;
				  $feat_image = '';

                        if (has_post_thumbnail( $post->ID ) ){ 

                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
						}
				  ?>
                          <img src="<?php echo $feat_image; ?>" alt="Chania">
                          <div class="carousel-caption">
                             <h2><?php echo the_title(); ?></h2>
                            <p> <?php echo the_content(); ?> </p>
                          </div>
                        </div>
						 <?php endwhile; 
						 wp_reset_postdata();?>	
		
					 <?php endif; ?> 
								
                     </div>
					 
					 </div>
                    
                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <!--carousel ends here.......-->
    </section>
    <!--banner section ends...-->
    
    <!--form area starts.................-->
    <div class="bg-form">
    <div class="form-front">
    	
		<?php echo do_shortcode('[contact-form-7 id="15" title="Home Contact"]');?>
                                  
    </div>
    </div>
    
    <!--form area  ends...............-->
    
    
     <!--About_us_front section starts...-->
    <section class="About_us_front">
    	<div class="row">
        	<div class="container">
            	<div class="section_heading3">
                	<p><?php echo of_get_option('w_subtitle','No Entry'); ?></p>
                	<h1><?php echo of_get_option('w_title','No Entry'); ?></h1>
                </div>
            	<div class="col-md-12">
                	<div class="About_us_front_wrapper">
                        <div class="About_us_front_text">
                            <?php echo of_get_option('w_content','No Entry'); ?>
                        </div>
                    </div>
                    <!-- work_area_wrapper....-->
                </div>
                <!--col-md-3 ends....-->
            </div>
        </div>
    </section>
    <!--works section ends...-->

    <!--services section starts...-->
    <section class="services_area">
    	<!--row starts here.....-->
    	<div class="row">
        	<div class="container">
            	<div class="col-md-12">
                	<div class="latest_inner">
                			<h1>Our Service  Type</h1>
                    </div>
                </div>
            	<div class="col-md-4 col-sm-4">
                	<div class="services_area_wrapper">
                        <div class="services_area_img box1">
                            <a href="<?php echo bloginfo('url'); ?>/service1"><img src="<?php echo of_get_option('img1','No Entry'); ?>" class="image2" alt=""></a>
                        </div>
                        <div class="services_area_text">
                            <a href="<?php echo bloginfo('url'); ?>/service1"><h2><?php echo of_get_option('s1','No Entry'); ?> </h2></a>
                            <p><?php echo of_get_option('s_content1','No Entry'); ?></p>	
                        </div>
                    </div>
                    <!-- work_area_wrapper....-->
                </div>
                <!--col-md-3 ends....-->
                <div class="col-md-4 col-sm-4">
                	<div class="services_area_wrapper">
                        <div class="services_area_img box1">
                            <a href="<?php echo bloginfo('url'); ?>/service2"><img src="<?php echo of_get_option('img2','No Entry'); ?>" class="image2" alt=""></a>
                        </div>
                        <div class="services_area_text">
                            <a href="<?php echo bloginfo('url'); ?>/service2"><h2><?php echo of_get_option('s2','No Entry'); ?> </h2></a>
                            <p><?php echo of_get_option('s_content2','No Entry'); ?></p>	
                        </div>
                    </div>
                    <!-- work_area_wrapper....-->
                </div>
                <!--col-md-3 ends....-->
                <div class="col-md-4 col-sm-4">
                	<div class="services_area_wrapper">
                       <div class="services_area_img box1">
                            <a href="<?php echo bloginfo('url'); ?>/service3"><img src="<?php echo of_get_option('img3','No Entry'); ?>" class="image2" alt=""></a>
                        </div>
                        <div class="services_area_text">
                            <a href="<?php echo bloginfo('url'); ?>/service3"><h2><?php echo of_get_option('s3','No Entry'); ?> </h2></a>
                            <p><?php echo of_get_option('s_content3','No Entry'); ?></p>	
                        </div>
                    </div>
                    <!-- work_area_wrapper....-->
                </div>
                <!--col-md-3 ends....-->
            </div>
        </div>
        <!--row ends here.....-->
    </section>
    <!--works section ends...-->
    
    <!--wallet section starts...-->
    <section class="wallet_area">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-5">
                	&nbsp;
                </div>
                <!--col-md-6 ends....-->
                <div class="col-md-7">
                	<div class="wallet_content">
                    	<h2><?php echo of_get_option('cms_title','No Entry'); ?></h2>
                        <p><?php echo of_get_option('cms_content','No Entry'); ?></p>
                    </div>
                </div>
                <!--col-md-6 ends....-->
            </div>
        </div>
    </section>
    <!--wallet section ends...-->
	
<?php get_footer(); ?>