<?php
/**
 * The template for displaying all pages.
 * Template Name: Landing Page w Gray Bottom Block Before ACF
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
$landing_text_content = get_field('landing_text_content');
$left_bottom_image = get_field('left_bottom_image');
$right_brand_image = get_field('right_brand_image');
$right_bottom_btn_text = get_field('right_bottom_btn_text');

?>

<!--====  End of ACF VARIABLES  ====-->




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
              
              <h1 class="text-center">YES! TAKE ME TO FREE DOWNLOADS.</h1>

              <h4 class="text-center">ENTER YOUR EMAIL ADDRESS BELOW TO START ATTRACTING PERFECT CUSTOMERS.</h4>

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



<section id="landing-page-1">

  <div class="container">
    
    <article class="body row">
      
      <div class="col-sm-6 col-md-6 col-lg-6">

        <h1 class="heading">FREE DOWNLOADS REVEALED</h1>

        <h3 class="sub-heading">How To Create High Quality Content To Attract Perfect Customers</h3>

        <ul class="the-list">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum tortor sodales dui congue faucibus.</p>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum tortor sodales dui congue faucibus.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum tortor sodales dui congue faucibus.
          </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum tortor sodales dui congue faucibus.</p>
        </ul>

        <figure class="the-arrow">
          
          <img class="img-responsive" src="/wp-content/uploads/2017/03/Screen-Shot-2017-03-23-at-9.55.22-PM.png" alt="">
          
        </figure>
        
      </div>

      <div class="col-sm-6 col-md-6 col-lg-6">

        <figure class="right-image">
          
          <img class="img-responsive center-block" src="/wp-content/uploads/2017/03/DMOL-Watermark-300.png" alt="">
          
        </figure>  

        <div class="btn-holder">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
            YES! TAKE ME TO FREE DOWNLOADS
          </button>

        </div>  
        
      </div>

    </article>  <!-- END OF BODY -->
    
  </div>  <!-- END OF CONTAINER -->

  <article class="footer">
    
    <div class="container">

      <h4 class="text-center">As Seen On:</h4>
      
      <div class="col-sm-2 col-md-2 col-lg-2">

        <figure class="brag-item">
          
          <img class="img-responsive center-block" src="/wp-content/uploads/2017/03/Screen-Shot-2017-03-23-at-10.31.59-PM.png" alt="">
          
        </figure>  
      
      </div>
      <div class="col-sm-2 col-md-2 col-lg-2">

        <figure class="brag-item">
          
          <img class="img-responsive center-block" src="/wp-content/uploads/2017/03/Screen-Shot-2017-03-23-at-10.31.59-PM.png" alt="">
          
        </figure>  
      
      </div>
      <div class="col-sm-2 col-md-2 col-lg-2">

        <figure class="brag-item">
          
          <img class="img-responsive center-block" src="/wp-content/uploads/2017/03/Screen-Shot-2017-03-23-at-10.31.59-PM.png" alt="">
          
        </figure>  
      
      </div>
      <div class="col-sm-2 col-md-2 col-lg-2">

        <figure class="brag-item">
          
          <img class="img-responsive center-block" src="/wp-content/uploads/2017/03/Screen-Shot-2017-03-23-at-10.31.59-PM.png" alt="">
          
        </figure>  
      
      </div>
      <div class="col-sm-2 col-md-2 col-lg-2">

        <figure class="brag-item">
          
          <img class="img-responsive center-block" src="/wp-content/uploads/2017/03/Screen-Shot-2017-03-23-at-10.31.59-PM.png" alt="">
          
        </figure>  
      
      </div>
      <div class="col-sm-2 col-md-2 col-lg-2">

        <figure class="brag-item">
          
          <img class="img-responsive center-block" src="/wp-content/uploads/2017/03/Screen-Shot-2017-03-23-at-10.31.59-PM.png" alt="">
          
        </figure>  
      
      </div>
    
    </div>

  </article>  <!-- END OF FOOTER -->  
 
</section> <!-- End Container --> 


<?php
get_footer();
