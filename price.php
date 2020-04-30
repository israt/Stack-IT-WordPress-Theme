<?php
/**
 * Template Name: Pricing
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
                	<div class="row pad_about">
                        <div class="inner_about">
                        	<div id="pricePlans">
		<ul id="plans">
			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Plan 1</h2></li>
					<li class="price"><p>$10/<span>month</span></p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a href="#">Purchase</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2 class="bestPlanTitle">Plan 2</h2></li>
					<li class="price"><p class="bestPlanPrice">$20/month</p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a class="bestPlanButton" href="#">Purchase</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Plan 3</h2></li>
					<li class="price"><p>$30/<span>month</span></p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a href="#">Purchase</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Plan 4</h2></li>
					<li class="price"><p>$40/<span>month</span></p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a href="#">Purchase</a></li>
				</ul>
			</li>
		</ul> <!-- End ul#plans -->
	</div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--inner content section starts...-->
    
       
    <!--footer starts...-->
   <?php get_footer(); ?>