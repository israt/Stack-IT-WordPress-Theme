<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!--banner section starts...-->
<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
				?>
				    <!--banner section starts...-->
    <section class="banner_area_inner_about">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="banner_text_inner_about">
                         <h2><?php the_title(); ?></h2>
                        <p><?php the_subtitle(); ?></p>
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
                	<div class="row pad_about">
                        <div class="inner_about">
                             <?php echo the_content(); ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--inner content section starts...-->
    
   
	<?php
		endwhile;
	?>
    <!--inner content section starts...-->
<?php get_footer(); ?>
