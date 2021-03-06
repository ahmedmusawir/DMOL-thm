<?php
/**
 * The main template file.
 * Template Name: Home Template
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

<?php 

/* Home ACF Variables */
$home_portfolio_headline = get_field('home_portfolio_headline', 6);
$home_portfolio_subheadline = get_field('home_portfolio_subheadline', 6);
$home_portfolio_btn_text = get_field('home_portfolio_btn_text', 6);
$home_portfolio_btn_link = get_field('home_portfolio_btn_link', 6);
/* Bottom Dark Block */
$left_image_link = get_field('left_image_link', 6);
$right_text_pane = get_field('right_text_pane', 6);

?>

<section class="above-blog-block-2">

	<div class="wrapper container-fluid">
		
		
		<h2><?php echo $home_portfolio_headline; ?></h2>

	

		<!--======================================
		=            The Related Post Block            =
		=======================================-->
	

		<?php 
		$current_categories = get_the_category();
		// $first_category = $current_categories[0]->term_id;

		$args = array(
			'post_type' => 'portfoliopro',
			'posts_per_page' => 4,
			// 'category__in' => array( $first_category ), //if you need specific category
			// 'category__in' => array( $current_categories ),
			'post__not_in' => array( $post->ID )
		);	

		$related_post_items = new WP_Query($args);
		?>

		<section id="single-related-post-block">
					
			<article class="post-content">

			<h4><?php echo $home_portfolio_subheadline; ?>	</h4>
			<!-- <h4>Here’s an overview of all the tracks, remixes, and other releases DOML brought to life.	</h4> -->

			<?php if ( $related_post_items->have_posts() ) : ?>
				<?php while ( $related_post_items->have_posts() ) : $related_post_items->the_post(); ?>					

					<div class="col-sm-3 col-md-3 col-lg-3">

						<?php if ( has_post_thumbnail() ) : ?> 
							
							<div class="featured-img">
								<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'blog-size', array('class' => 'img-responsive'));  ?></a>

							</div>
						<?php else : ?>	

							<div class="featured-img">
							
								<a href="<?php the_permalink(); ?>" title=""><img class="img-responsive" src="/wp-content/uploads/2016/08/emply-blog-img.jpg" alt=""></a>

							</div>				

						<?php endif; ?>		

					
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					</div>
							
				<?php endwhile; ?>	

			<?php endif; 

			wp_reset_postdata();

			?>

			</article>

		</section>	<!-- END SINGLE RELATED POST BLOCK -->	
		<a class="btn btn-success btn-lg" href="<?php echo $home_portfolio_btn_link; ?>">
			<?php echo $home_portfolio_btn_text; ?>
		</a>

	</div> <!-- END WRAPPER -->
	
</section>

<section class="below-blog-block-1">

	<div class="wrapper container-fluid">

		<article class="col-sm-7 col-md-7 col-lg-7 left-block" >
			<img class="img-responsive center-block" src="<?php echo $left_image_link; ?>" alt="">
		</article>

		<article class="col-sm-5 col-md-5 col-lg-5">

			<div class="right-block">		

				<?php echo $right_text_pane; ?>				
				
			</div>

		</article>
		
		

	</div>

</section>


<?php

get_footer();
