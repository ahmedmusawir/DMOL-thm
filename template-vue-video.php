<?php
/**
 * The template for displaying all pages.
 * Template Name: Video Page Template
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

<section id="app" class="container-fluid">

 <div id="mobile-single-list" class="col-sm-12 col-xs-12 visible-xs visible-sm hide">
    
         <div class="">

         <!--    <h3>
              Message From Vue: {{ ajax }}
            </h3>  -->
            <ul class="list-group well container" v-for="vid in vids">
              <li class="list-group-item" >

                  <a :href="vid.link">
                    <h4 class="" v-html="vid.title.rendered">
                    
                    
                        {{ vid.title.rendered }}


                    </h4>  
                  <hr/>

                  </a>  
                  <div class="row">
                    <a :href="vid.link">
                        <div class="col-md-3 col-sm-3"><img class="img-responsive" :src="vid.featured_thumb" alt=""></div>
                        
                    </a>
                    <div class="col-md-9 col-sm-9" v-html="vid.excerpt.rendered">
                            {{ vid.excerpt.rendered }}
                        </div>                    

                  </div>
              </li>
            </ul>
            
        </div>

  </div>


  <!-- FOR DESKTOPS -->
  <div id="primary" class="content-area col-md-5 col-lg-5 hidden-sm hidden-xs">
    <main id="main" class="site-main" role="main">


        <div id="left-inner-content-div"  class="">

            <h3 class="text-center">
             {{ videoTitle }}
            </h3> 
              <br>
            <ul class="list-group well" v-for="vid in vids">
              <li class="list-group-item " >
                <div class="row">
                  <a @click="getSingleVid(vid.id, show=false)">
                    <h4 class="col-md-12" v-html="vid.title.rendered">
                      {{ vid.title.rendered }}
                    </h4>
                  <hr/>
                    
                  </a>                  
                  <a @click="getSingleVid(vid.id, show=false)">
                      <div class="col-md-3"><img class="img-circle img-responsive" :src="vid.featured_thumb" alt=""></div>
                  </a>

                  <div class="col-md-9" v-html="vid.excerpt.rendered">
                    <p>

                      {{ vid.excerpt.rendered }}
                      
                    </p>
                  </div>

                  <br>
                  <a @click="getSingleVid(vid.id, show=false)">
                      <button class="btn btn-success btn-sm" type="">READ MORE</button>
                  </a>    


                </div>
              </li>
            </ul>
              
            
        </div>

  

    </main><!-- #main -->
  </div><!-- #primary -->

       <div id="right-inner-content-div" class=" col-md-7 col-md-7 hidden-sm hidden-xs"  >

           <article >

            <h3 v-if="show" v-html="singleVid.title"  class=" animated zoomIn" >{{ singleVid.title }}</h3>

           </article>
           <article>
            <!-- <img v-if="show" class=" animated lightSpeedIn" class="img-responsive f-image" :src="singlePost.featured_full" alt=""> -->

          </article>
          <article>

            <p  v-if="show" class=" animated fadeIn" v-html="singleVid.content">
              {{ singleVid.content }}
            </p>

          </article>    
          
        </div>          
 
</section> <!-- End Container --> 


  
  

  
  
  



<?php
get_footer();
