<?php
/**
 * The main template file.
 * Template Name: Blog Template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

// $client_designation = get_field( 'client_designation' );

get_header(); ?>

	<section class="top-form-bar hide">
		<div class="container">
			<article class="form-bar-content-holder">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<div class="form-bar-left-block">
						<h2 class="form-bar-left-text">
							SIGN UP FOR MY FREE TRANSFORMATION GUIDE:<br>
							5 DAILY HABITS TO TRANSFORM YOUR BODY, MIND AND HEALTH
						</h2>
						<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2016/06/Screen-Shot-2016-06-24-at-2.43.19-PM.png" alt=""> -->

					</div>
					<div class="form-bar-right-block">
						<div class="form-bar-right-form-holder">
							
							<?php 

								if ( ! is_active_sidebar( 'frontpg-convertkit' ) ) {
									echo "Please Add a Widget Here";
								}

								dynamic_sidebar( 'frontpg-convertkit' ); 

							?>							

						</div>
					</div>
				</div>	
			</article>
		</div>
	</section>

<section class="above-blog-block-1">
	
	<!-- <img class="img-responsive wow lightSpeedIn" src="/wp-content/uploads/2016/06/TianaMediaBlock.jpg" data-wow-duration="1s" data-wow-delay="0s" alt=""> -->
	<!-- <img class="img-responsive wow zoomInUp center-block" src="/wp-content/uploads/2016/06/TianaNEWJuneTextBlock1.png" data-wow-duration="1s" data-wow-delay="0s" alt=""> -->
	
</section>

<section class="above-blog-block-2">

	<div class="wrapper container-fluid">
		
		
		<h2>Get Info Action. Click on a Button to Learn More Now</h2>

	
		<div class="icon-content">

			<figure class="col-sm-4 col-md-4 col-md-lg">
				<!-- <a href="#" target="_blank"> -->
				<a href="/why-cleanse/" target="_self">
					<img class="img-responsive wow bounceInLeft" src="/wp-content/uploads/2016/11/Screen-Shot-2016-11-26-at-9.42.50-PM.png" data-wow-duration="1s" data-wow-delay="0s" alt="">
					<article class="text-content"><br>
						Solutions for Stubborn Weight Loss, <br>
						Vibrant Energy and Optimal Health

					</article>
				</a>

			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">

				<a href="https://www.facebook.com/ina.nozek" target="_blank">
					<img class="img-responsive wow zoomIn" src="/wp-content/uploads/2016/11/Screen-Shot-2016-11-26-at-9.42.50-PM.png" data-wow-duration="1s" data-wow-delay="0s" alt="">
					<article class="text-content"><br>
						Join Dr. Ina’s Community <br>
						for Daily Resources & Inspiration

					</article>
				</a>

			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">

				<a href="/contact-me/" target="_self">
					<img class="img-responsive wow bounceInRight" src="/wp-content/uploads/2016/11/Screen-Shot-2016-11-26-at-9.42.50-PM.png" data-wow-duration="1s" data-wow-delay="0s" alt="">
					<article class="text-content"><br>
						Free Consultation with Dr. Ina to <br>
						discuss your Health & Wellness Goals

					</article>
				</a>

			</figure>						

		</div>
	

	</div>
	
</section>

<!-- BLOG BLOCK -->

<section class="container">

	<div id="primary" class="content-area col-md-8 col-lg-8">
		<main id="main" class="site-main" role="main">
		<!-- <h1><?php echo $client_designation; ?></h1>		 -->

		<?php
		if ( have_posts() ) :

			// if ( is_home() && ! is_front_page() ) : ?>
				<!-- <header> -->
					<!-- <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1> -->
				<!-- </header> -->

			<?php
			// endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="sidebar col-md-4 col-md-4">

		<?php get_sidebar();  ?>
		
	</div>

</section>

<section class="below-blog-block-1 hide">

	<div class="wrapper container-fluid">
		
		<h2>Learn the Exact Step By Step Systems behind</h2>
		<h2>creating your own profitable online marketing funnel.</h2>
		<br><br>
		<div class="icon-content">

			<figure class="col-sm-12 col-md-12 col-12">
				<!-- <img class="center-block img-responsive wow zoomIn" src="/wp-content/uploads/2016/06/TianaBullseyeImage.png" data-wow-duration="2s" data-wow-delay="0s" alt=""> -->
				<!-- <iframe src="https://player.vimeo.com/video/171235632" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

					<div class="col-md-2 col-lg-2"></div>
						<div class="col-md-8 col-lg-8">
							<div class="embed-responsive embed-responsive-16by9">
							  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/171235632"></iframe>
							</div>
						</div>	
					<div class="col-md-2 col-lg-2"></div>


			</figure>
			<!-- 16:9 aspect ratio -->

		</div>

		<h1>HEY DREAM ARCHER - TIME TO FOLLOW YOUR ARROW!</h1>

	</div>


</section>

<section class="below-blog-block-2 hide">

		<div class="wrapper container-fluid">
		
		<h2> READY TO LEARN? LET'S DO THIS! </h2>

		<div class="icon-content">

			<figure class="col-sm-4 col-md-4 col-md-lg">
				<a href="http://tianagustafson.teachable.com/courses/goals-with-soul" target="_blank">
					<img class="img-responsive wow bounceInLeft" src="/wp-content/uploads/2016/06/TianaNEWJuneAutomateDominate.png" data-wow-duration="1s" data-wow-delay="0s" alt="">
				</a>
				
			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">
				<a href="http://tianagustafson.teachable.com/courses/bullseye-funnels" target="_blank">
					<img class="img-responsive wow zoomInDown" src="/wp-content/uploads/2016/06/TianaNEWJuneBullseyeFunnels.png" data-wow-duration="2s" data-wow-delay="s" alt="">
				</a>
			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">
				<a href="http://tianagustafson.teachable.com/courses/goals-with-soul" target="_blank">
					<img class="img-responsive wow bounceInRight" src="/wp-content/uploads/2016/06/TianaNEWJuneGoalswithsoul.png" data-wow-duration="1s" data-wow-delay="0s" alt="">
				</a>
			</figure>						

		</div>

		<article class="btn-holder text-center col-sm-12 col-md-12 col-lg-12">

			<a class="btn btn-lg btn-danger"  href="https://tianastar.leadpages.co/leadbox/145df2473f72a2%3A1497094e8b46dc/5655608640405504/" target="_blank">
				YES! SHOW ME MORE!
			</a>
			<script data-leadbox="145df2473f72a2:1497094e8b46dc" data-url="https://tianastar.leadpages.co/leadbox/145df2473f72a2%3A1497094e8b46dc/5655608640405504/" data-config="%7B%7D" type="text/javascript" src="https://tianastar.leadpages.co/leadbox-1465587185.js"></script>

		</article>

	</div>
	
</section>
<?php

get_footer();
