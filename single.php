<?php
/************
 * The template for displaying all single posts
 ***********/
get_header(); ?>
	 <!-- Page Wrapper -->
    <div id="page" class="animsition equal" data-loader-type="loader2" data-page-loader-text="Bitcoin ATM Near Me" data-animsition-in="zoom-outy" data-animsition-out="fade-out-up-sm" style="transform-origin: 50% 50vh;">
        <div id="top"></div>
        <!-- Home Section -->
        <div class="page-header blog-background full-screen table overlay">
            <div class="table-cell">
                <div class="container">
                    <div class="row font-second">
                        <div class="col-sm-8 page-header-title-left">
                            <h1 class="hs-text-12 init-animation-4 delay0-4s">our <span>Blog</span></h1>
                            <div class="hs-text-6 init-animation-4 delay0-6s">
                                24/7 Support Team Reday
                            </div>
                        </div>
                        <!--/ End col -->
                        <div class="col-sm-4">
                            <ol class="breadcrumb  text-right">
                                <li class="init-animation-3 delay0-8s"><a class="animsition-link" href="<?php bloginfo('url'); ?>">Home</a>
                                </li>
                                <li class="active init-animation-3 delay1-0s">Blog</li>
                            </ol>
                        </div>
                        <!--/ End col -->
                    </div>
                    <!--/ End row -->
                </div>
                <!--/ End container -->
            </div>
            <span class="scroll-down-arrow in-page-scroll" data-start="display: inline-block" data-100-start="display: none">
                    <a href="index.php#instructions" class="init-animation-2 delay1-8s"></a>
                </span>
        </div>
        <!--/ End Home Section -->
        <!-- Navbar -->
        <div class="position-relative">
            <div id="nav-wrapper" class="transp-nav">
                <nav id="nav" class="navbar navbar-fixed-top navbar-transparent navbar-dark ripple-group-parent init-animation-1" role="navigation">
                    <!-- progressbar -->
                    <div id="scroll-progressbar" class="scroll-progressbar">
                        <div>
                            <span class="scroll-shadow"></span>
                        </div>
                    </div>
                    <div class="container in-page-scroll">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" id="animated-navicon" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                           
                                <div class="navbar-logo pull-left">
                                     <a class="navbar-brand ripple-group" href="<?php bloginfo('url'); ?>#home"><img src="<?php echo of_get_option('logos','no entry');?>" alt="logo" /></a>
                                </div>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="mobile-navbar-collapse">
                            <ul class="nav navbar-nav navbar-right cl-effect-5">
                                <li>
                                    <a class="ripple-group" href="<?php bloginfo('url'); ?>#home">
                                        <span data-hover="HOME">HOME</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="ripple-group" href="<?php bloginfo('url'); ?>#instructions">
                                        <span data-hover="INTSTRUCTIONS">INTSTRUCTIONS</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="ripple-group" href="<?php bloginfo('url'); ?>#location">
                                        <span data-hover="location">location</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="ripple-group" href="<?php bloginfo('url'); ?>/blog/">
                                        <span data-hover="BLOG">BLOG</span>
                                    </a>
                                </li>
								 <li>
                                    <a class="ripple-group" href="<?php bloginfo('url'); ?>#subscribe-save">
                                        <span data-hover="SUBSCRIBE & SAVE"> SUBSCRIBE & SAVE</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="ripple-group" href="<?php bloginfo('url'); ?>#contact-us">
                                        <span data-hover="Contact Us">CONTACT US</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container -->
                </nav>
            </div>
        </div>
        <!--/ End Navbar -->
        <div id="page-2">
             <!-- About Section -->
            
            <div class="section">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-sm-12 padding-right-sm-30">
                        <!-- blog-item -->
                        <?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				?>
                <?php
				 $feat_image3 = '';
                if (has_post_thumbnail( $post->ID ) ){ 
                $feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
				}
				?>
                      <section class="blog-post">
                            <!-- Post Media -->
                            <div class="blog-page-media">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img class="parallax-img img-responsive" src="<?php echo $feat_image3; ?>" alt="<?php the_title();?>" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -10%, 0px)" data-bottom-top="transform: translate3d(0px, -90%, 0px)">
                                </div>
                            </div>
                            <!-- Post Title -->
                            <h1 class="blog-page-post-title font-second"><span><?php the_title();?></span></h1>
                            <!-- Date, Author, Categories, Comments -->
                            <div class="blog-item-detail no-margin-left">
                               <i class="fa fa-user"></i> <?php the_author(); ?>                      
                                <i class="fa fa-comment"></i> <?php comments_number( 'no', 'one', '%' ); ?> comments
								 <i class="fa fa-calendar"> </i> <?php the_time('F jS, Y') ?>
                            </div>
                            <!-- Post body text -->
                            <div class="blog-item-body">
                               <?php the_content(); ?>   
                            </div>
                            <!--/ End Post body text -->
                        </section>
						
						
						               <!-- Comments -->
                        <section class="blog-comment-section">
                            <h1 class="blog-page-post-title margin-bottom-60 font-second"><strong>Comments</strong></h1>
							<div id="comments" class="comments-area">
<?php comments_template(); ?> 
								
							
							</div>                         
                        </section>
                        <!-- End Comments -->                      
                        <!--/ End blog-item -->
                        <div id="end-content"></div>
                    </div>
                    <!--/ End col -->
                      <?php
						// End the loop.
						endwhile;
						?>
                </div>
                <!--/ End row -->
            </div>
            <!--/ End container -->
        </div>
            
            <!-- Contact Section -->
            
            <!--/ End Contact Section -->
<?php get_footer(); ?>