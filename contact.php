<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>

    <!--banner section starts...-->
    <section class="banner_area_inner_about">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="banner_text_inner_about">
                        <h2><?php the_title();?></h2>
                    <p><?php the_subtitle();?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner section ends...-->
    <!--inner content section starts...-->
    <section class="inner_content">
    	<div class="row">
        	<div class="container">
            	<div class="col-md-12 col-sm-12">
                    <div class="inner_about">
                    	<!--contact starts...--> 
                        <div class="contact2">
                            <div class="col-md-5">
                            	<div class="row">
                                <div class="contact-book">
                                    <ul>
                                        <li><b>Address:</b></li>
                                        <?php echo of_get_option('address','No Entry'); ?> 
                                        <li><b>Company No.</b> <?php echo of_get_option('company','No Entry'); ?></li>
                                        <li><b>Tel:</b> <?php echo of_get_option('tel','No Entry'); ?></li>
                                        <li><b>Email:</b> <?php echo of_get_option('email','No Entry'); ?></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            <!--col-md-6 ends...-->
                            <div class="col-md-7">
                              <div class="form_area_inner">
                                <h2><b>Your Enquiry</b></h2>
                                <?php echo do_shortcode('[contact-form-7 id="44" title="Contact Us"]');?>
                            </div>
                         </div>
                         <!--col-md-6 ends...-->
                         <div class="col-md-12">
                         <!--contact_map starts..-->
                         	 <div class="contact_map">
                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26360621.00874019!2d-113.74318153068141!3d36.24315596716282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sbd!4v1447655903222" width="95%" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                                   
                                </div>
                          <!--contact_map ends..-->
                         	</div>
                        </div>
                        <!--contact ends...--> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--inner content section ends...-->

    
    <!--footer starts...-->
   <?php get_footer(); ?>