	 <!--like  starts....-->
    <section class="like_area">
    	<div class="row">
        	<div class="container">
            	<div class="col-md-12">
                	<div class="like_inner">
                    	<div class="section_heading_like">
                        	<div class="col-md-12">
                                <h1>Let's talk : </h1>
                                <p><?php echo of_get_option('talk','No Entry'); ?></p>
                                
                            </div>
                		</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--latest_events ends....-->
    <!--footer starts...-->
    <footer>
    	<div class="row">
        	<div class="container">
                <div class="col-md-6 col-sm-6">
                    <div class="footer_list2">
                        <ul>
						        <li><a href="<?php echo bloginfo('url'); ?>/about-us"> ABOUT  US </a></li>
                                <li><a href="<?php echo bloginfo('url'); ?>/how-it-works">HOW  IT  WORKS</a></li>
                                <li><a href="<?php echo bloginfo('url'); ?>/pricing">PRICING </a></li>
                                <li><a href="<?php echo bloginfo('url'); ?>/contact-us">Contact Us</a></li>
                        </ul>
                         <p><?php echo of_get_option('copyright','No Entry'); ?></p>
                    </div>
                </div>
                <!--col-md-2 ends....-->
                <div class="col-md-6 col-sm-6">
                    <div class="social_bookmarks">
			<ul>
				<li><a href="<?php echo of_get_option('facebook_link','No Entry'); ?>"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?php echo of_get_option('twitter_link','No Entry'); ?>"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?php echo of_get_option('ins_link','No Entry'); ?>"><i class="fa fa-instagram"></i></a></li>
				<li><a href="<?php echo of_get_option('you_link','No Entry'); ?>"><i class="fa fa-youtube"></i></a></li>
				<li><a href="<?php echo of_get_option('linkin_link','No Entry'); ?>"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="<?php echo of_get_option('gplus_link','No Entry'); ?>"><i class="fa fa-google-plus"></i></a></li>
			</ul>
                    </div>
                   
                </div>
                <!--col-md-3 ends....-->
            </div>
        </div>
    </footer>
    <!--footer starts...-->
    
    
	





<!-- **** JS(Java Script) FILES****** --> 
<!-- Lib -->
<?php wp_footer();?>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>
<!-- BOOTSTRAP js -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
<!-- Menu JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu-responsive.js"></script>
<!-- bx JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.bxslider').bxSlider();
	});
</script>
<!-- Add fancyBox main JS files -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
		$(document).ready(function() {
			
			$('.fancybox').fancybox();

		});
	</script>
    
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/toucheffects.js"></script>


</body>
</html>
