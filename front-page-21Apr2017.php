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


<section class="above-blog-block-2">

	<div class="wrapper container-fluid">
		
		
		<h2>LATEST MUSIC</h2>

	

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

			<h4>Here’s an overview of all the tracks, remixes, and other releases DOML brought to life.	</h4>

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

					
						<!-- <img class="img-responsive" src="/wp-content/uploads/2016/06/TianaNEWJuneBlock_no-featured-version.jpg" alt=""> -->
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					</div>
							
				<?php endwhile; ?>	

			<?php endif; 

			wp_reset_postdata();

			?>

			</article>

		</section>	<!-- END SINGLE RELATED POST BLOCK -->	
		<a class="btn btn-success btn-lg" href="/music/">
			MORE MUSIC
		</a>

	</div> <!-- END WRAPPER -->
	
</section>

<section class="below-blog-block-1">

	<div class="wrapper container-fluid">

		<article class="col-sm-7 col-md-7 col-lg-7 left-block" >
			<img class="img-responsive center-block" src="/wp-content/uploads/2016/12/block2-800x800.jpg" alt="">
		</article>

		<article class="col-sm-5 col-md-5 col-lg-5">

			<div class="right-block">			
				<h4 class="">
					DJ and producer DMOL is a born perfectionist. His five-time number one position in the critically acclaimed DJ Mag Top 100 DJs Poll has been the result of his loyalty to fans, his creativity in the studio, the perseverance with which he hosts his weekly radio show ‘A State of Trance’, and the energy he brings to the crowds in front of him. Despite the heavy pressure that comes along with being one of the world’s most popular DJs, DMOL has always kept his focus on the music. And that’s exactly what keeps him going.
				</h4>

				<!-- <figure class="img-block flex-item">
					
					<div class="col-sm-4 col-md-4 col-lg-4">
						<img class="img-responsive" src="http://dmol.local/wp-content/uploads/2016/12/symbol-1-400.jpg" alt="">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<img class="img-responsive" src="http://dmol.local/wp-content/uploads/2016/12/symbol-2-400.jpg" alt="">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<img class="img-responsive" src="http://dmol.local/wp-content/uploads/2016/12/symbol-3-400.jpg" alt="">
					</div>
					
				</figure> -->
			</div>

		</article>
		
		

	</div>

</section>

<!-- <section class="below-blog-block-2 hide">

	<div class="wrapper container-fluid">
		



	</div>
	
</section> -->
<?php

get_footer();
