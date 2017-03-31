<?php
/**
 * The template for displaying all pages.
 * Template Name: Landing Page Thankyou 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>

<!--===================================
=            ACF VARIABLES            =
====================================-->

<?php 

$landing_title = get_field('landing_title');
$landing_subtitle = get_field('landing_subtitle');
$right_brand_image = get_field('right_brand_image');
$right_bottom_btn_text = get_field('right_bottom_btn_text');
$right_bottom_btn_url = get_field('right_bottom_btn_url');

/* Gray Bottom Block Images */
$gray_brag_block_image_1 = get_field('gray_brag_block_image_1');
$gray_brag_block_image_2 = get_field('gray_brag_block_image_2');
$gray_brag_block_image_3 = get_field('gray_brag_block_image_3');
$gray_brag_block_image_4 = get_field('gray_brag_block_image_4');
$gray_brag_block_image_5 = get_field('gray_brag_block_image_5');
$gray_brag_block_image_6 = get_field('gray_brag_block_image_6');

/* Music Download Links Text */
$left_music_dwnld_text_1 = get_field('left_music_dwnld_text_1');
$left_music_dwnld_text_2 = get_field('left_music_dwnld_text_2');
$left_music_dwnld_text_3 = get_field('left_music_dwnld_text_3');
$left_music_dwnld_text_4 = get_field('left_music_dwnld_text_4');
$left_music_dwnld_text_5 = get_field('left_music_dwnld_text_5');
$left_music_dwnld_text_6 = get_field('left_music_dwnld_text_6');
$left_music_dwnld_text_7 = get_field('left_music_dwnld_text_7');
$left_music_dwnld_text_8 = get_field('left_music_dwnld_text_8');
$left_music_dwnld_text_9 = get_field('left_music_dwnld_text_9');
$left_music_dwnld_text_10 = get_field('left_music_dwnld_text_10');
$left_music_dwnld_text_11 = get_field('left_music_dwnld_text_11');
$left_music_dwnld_text_12 = get_field('left_music_dwnld_text_12');
$left_music_dwnld_text_13 = get_field('left_music_dwnld_text_13');
$left_music_dwnld_text_14 = get_field('left_music_dwnld_text_14');
$left_music_dwnld_text_15 = get_field('left_music_dwnld_text_15');
$left_music_dwnld_text_16 = get_field('left_music_dwnld_text_16');

/* Music Download Links URLs */
$left_music_dwnld_url_1 = get_field('left_music_dwnld_url_1');
$left_music_dwnld_url_2 = get_field('left_music_dwnld_url_2');
$left_music_dwnld_url_3 = get_field('left_music_dwnld_url_3');
$left_music_dwnld_url_4 = get_field('left_music_dwnld_url_4');
$left_music_dwnld_url_5 = get_field('left_music_dwnld_url_5');
$left_music_dwnld_url_6 = get_field('left_music_dwnld_url_6');
$left_music_dwnld_url_7 = get_field('left_music_dwnld_url_7');
$left_music_dwnld_url_8 = get_field('left_music_dwnld_url_8');
$left_music_dwnld_url_9 = get_field('left_music_dwnld_url_9');
$left_music_dwnld_url_10 = get_field('left_music_dwnld_url_10');
$left_music_dwnld_url_11 = get_field('left_music_dwnld_url_11');
$left_music_dwnld_url_12 = get_field('left_music_dwnld_url_12');
$left_music_dwnld_url_13 = get_field('left_music_dwnld_url_13');
$left_music_dwnld_url_14 = get_field('left_music_dwnld_url_14');
$left_music_dwnld_url_15 = get_field('left_music_dwnld_url_15');
$left_music_dwnld_url_16 = get_field('left_music_dwnld_url_16');



?>

<!--====  End of ACF VARIABLES  ====-->

<section id="landing-page-thankyou">

  <div class="container">
    
    <article class="header row hide">
      
      <div class="col-sm-12 col-md-12 col-lg-12">

        <img class="img-responsive pull-left" src="/wp-content/uploads/2015/12/DMOL-Profile-Pic-94x87.jpg" alt="">

      </div>

    </article> <!-- END OF HEADER -->

    <article class="body row">
      
      <div class="col-sm-8 col-md-8 col-lg-8">

        <h1 class="heading text-center"><?php echo $landing_title; ?></h1>

        <h3 class="sub-heading text-center"><?php echo $landing_subtitle; ?></h3>

        <ul class="the-list">

          <div class="col-sm-6 col-md-6 col-md-6 text-center">

            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_1; ?>" title=""><?php echo $left_music_dwnld_text_1; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_2; ?>" title=""><?php echo $left_music_dwnld_text_2; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_3; ?>" title=""><?php echo $left_music_dwnld_text_3; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_4; ?>" title=""><?php echo $left_music_dwnld_text_4; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_5; ?>" title=""><?php echo $left_music_dwnld_text_5; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_6; ?>" title=""><?php echo $left_music_dwnld_text_6; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_7; ?>" title=""><?php echo $left_music_dwnld_text_7; ?></a>
            </li>   
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_8; ?>" title=""><?php echo $left_music_dwnld_text_8; ?></a>
            </li>         
            
          </div>
          <div class="col-sm-6 col-md-6 col-md-6 text-center">
            
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_9; ?>" title=""><?php echo $left_music_dwnld_text_9; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_10; ?>" title=""><?php echo $left_music_dwnld_text_10; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_11; ?>" title=""><?php echo $left_music_dwnld_text_11; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_12; ?>" title=""><?php echo $left_music_dwnld_text_12; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_13; ?>" title=""><?php echo $left_music_dwnld_text_13; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_14; ?>" title=""><?php echo $left_music_dwnld_text_14; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_15; ?>" title=""><?php echo $left_music_dwnld_text_15; ?></a>
            </li>
            <li>
              <a class="" href="<?php echo $left_music_dwnld_url_16; ?>" title=""><?php echo $left_music_dwnld_text_16; ?></a>
            </li>

          </div>




        </ul>

      </div>

      <div class="col-sm-4 col-md-4 col-lg-4">

        <figure class="right-image">
          
          <img class="img-responsive center-block" src="<?php echo $right_brand_image; ?>" alt="">
          
        </figure>  

        <div class="btn-holder">

          <a class="btn btn-default btn-block" href="<?php echo $right_bottom_btn_url; ?>" title=""><?php echo $right_bottom_btn_text; ?></a>

        </div>  
        
      </div>

    </article>  <!-- END OF BODY -->
    
  </div>  <!-- END OF CONTAINER -->

  <article class="footer">
    

    <div class="container">
      
        <h4 class="text-center">As Seen On:</h4>

        <div id="FLEX-CONTAINER">
          
              
              <img class="img-responsive center-block brag-item" src="<?php echo $gray_brag_block_image_1; ?>" alt="">
              
          
              
              <img class="img-responsive center-block brag-item" src="<?php echo $gray_brag_block_image_2; ?>" alt="">
              
          
              
              <img class="img-responsive center-block brag-item" src="<?php echo $gray_brag_block_image_3; ?>" alt="">
              
          
              
              <img class="img-responsive center-block brag-item" src="<?php echo $gray_brag_block_image_4; ?>" alt="">
              
          
              
              <img class="img-responsive center-block brag-item" src="<?php echo $gray_brag_block_image_5; ?>" alt="">
              
          
              
              <img class="img-responsive center-block brag-item" src="<?php echo $gray_brag_block_image_6; ?>" alt="">
              
            
              
        </div>  <!-- FLEX-CONTAINER END -->


    </div>
      

  </article>  <!-- END OF FOOTER -->  
 
</section> <!-- End Container --> 


<?php
get_footer();
