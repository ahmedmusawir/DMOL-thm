<?php
/**
 * The template for displaying all pages.
 * Template Name: Vue Template
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

 <div id="mobile-single-list" class="col-sm-12 col-xs-12 visible-xs visible-sm">
    
         <div class="well">

            <h3>
              Message From Vue: {{ ajax }}
            </h3> 
              <br>
            <ul class="list-group" v-for="post in posts">
              <li class="list-group-item list-group-item-success" >
                <div class="row">
                  <a :href="post.link">
                      <div class="col-md-3"><img class="img-circle img-responsive" :src="post.featured_thumb" alt=""></div>
                      <div class="col-md-9" v-html="post.title.rendered">
                        {{ post.title.rendered }}
                      </div>
                  </a>
                  <hr/>
                  <div class="col-md-12" v-html="post.excerpt.rendered">
                    {{ post.excerpt.rendered }}
                  </div>
                </div>
              </li>
            </ul>
            
        </div>

  </div>


  <!-- FOR DESKTOPS -->
  <div id="primary" class="content-area col-md-6 col-lg-6 hidden-sm hidden-xs">
    <main id="main" class="site-main" role="main">


        <div id="left-inner-content-div"  class="well">

            <h3>
              Message From Vue: {{ ajax }}
            </h3> 
              <br>
            <ul class="list-group" v-for="post in posts">
              <li class="list-group-item list-group-item-success" >
                <div class="row">
                  <a @click="getSingle(post.id, show=false)">
                      <div class="col-md-3"><img class="img-circle img-responsive" :src="post.featured_thumb" alt=""></div>
                      <div class="col-md-9" v-html="post.title.rendered">
                        {{ post.title.rendered }}
                      </div>
                  </a>
                  <hr/>
                  <div class="col-md-12" v-html="post.excerpt.rendered">
                    {{ post.excerpt.rendered }}
                  </div>
                </div>
              </li>
            </ul>
              
            
        </div>
  

    </main><!-- #main -->
  </div><!-- #primary -->
  <div id="right-inner-content-div" class="sidebar col-md-6 col-md-6 hidden-sm hidden-xs"  >

    <?php //get_sidebar();  ?>

    <h1>The ID: {{singlePost.id}}</h1>

     <article >
      <h3 v-if="show"  class=" animated zoomIn" >{{ singlePost.title }}</h3>

    </article>
     <article>
      <img v-if="show" class=" animated lightSpeedIn" class="img-responsive" :src="singlePost.featured_full" alt="">

    </article>
    <article>

      <p  v-if="show" class=" animated fadeInUp" v-html="singlePost.content">
        {{ singlePost.content }}
      </p>

    </article>    
    
  </div>
</section> <!-- End Container --> 


  
  

  
  
  



<?php
get_footer();
