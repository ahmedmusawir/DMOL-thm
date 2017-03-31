<?php
/**
 * The template for displaying all pages.
 * Template Name: Landing Page w Gray Bottom Block
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

<?php 
/* Modal ACF Vars from OPT-IN POPup Page */

$title_headline = get_field('title_headline', 3504);
$sub_title_text = get_field('sub_title_text', 3504);

?>
<!-- THE MODAL CODE -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"></h4>
        </div>
        <div class="modal-body">

          <section id="popup-form-click" class="">

            <h5 class="text-center">50% Complete</h5>

            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                <span class="sr-only">50% Complete</span>
              </div>
            </div>        

            <article class="popup-text">
              
              <!-- <h1 class="text-center">YES! TAKE ME TO FREE DOWNLOADS.</h1> -->
              <h1 class="text-center"><?php echo $title_headline; ?></h1>

              <!-- <h4 class="text-center">ENTER YOUR EMAIL ADDRESS BELOW TO START ATTRACTING PERFECT CUSTOMERS.</h4> -->
              <h4 class="text-center"><?php echo $sub_title_text; ?></h4>

            </article>

            <article class="form-container">

                <?php echo do_shortcode( '[contact-form-7 id="3345" title="DMOL OPT IN FORM - FREE DOWNLOAD"]' ); ?>

            </article>
            
          </section>

        </div>
        <div class="modal-footer">
          <h5 class="text-center"><i class="fa fa-lock" aria-hidden="true"></i> 100% Secure.</h5>
          <!-- <button type="button" class="btn btn-success" data-dismiss="modal">Close</button> -->
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>          

<!--===================================
=            ACF VARIABLES            =
====================================-->

<?php 

$landing_title = get_field('landing_title');
$landing_subtitle = get_field('landing_subtitle');
$landing_text_content = get_field('landing_text_content');
$left_bottom_image = get_field('left_bottom_image');
$right_brand_image = get_field('right_brand_image');
$right_bottom_btn_text = get_field('right_bottom_btn_text');

/* Gray Bottom Block Images */
$gray_brag_block_image_1 = get_field('gray_brag_block_image_1');
$gray_brag_block_image_2 = get_field('gray_brag_block_image_2');
$gray_brag_block_image_3 = get_field('gray_brag_block_image_3');
$gray_brag_block_image_4 = get_field('gray_brag_block_image_4');
$gray_brag_block_image_5 = get_field('gray_brag_block_image_5');
$gray_brag_block_image_6 = get_field('gray_brag_block_image_6');

?>

<!--====  End of ACF VARIABLES  ====-->



<section id="landing-page-1">

  <div class="container">
    
    <article class="body row">
      
      <div class="col-sm-6 col-md-6 col-lg-6">

        <h1 class="heading"><?php echo $landing_title; ?></h1>

        <h3 class="sub-heading"><?php echo $landing_subtitle; ?></h3>

        <ul class="the-list">
          <?php echo $landing_text_content; ?>
        </ul>

        <figure class="the-arrow">
          
          <img class="img-responsive" src="<?php echo $left_bottom_image; ?>" alt="">
          
        </figure>
        
      </div>

      <div class="col-sm-6 col-md-6 col-lg-6">

        <figure class="right-image">
          
          <img class="img-responsive center-block" src="<?php echo $right_brand_image; ?>" alt="">
          
        </figure>  

        <div class="btn-holder">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
            <?php echo $right_bottom_btn_text; ?>
          </button>

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
