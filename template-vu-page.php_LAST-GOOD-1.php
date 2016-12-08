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

<section class="container">
<!-- <h1>I am page</h1> -->
  <div id="primary" class="content-area col-md-6 col-lg-6">
    <main id="main" class="site-main" role="main">


        <div id="app" class="well">
            
            <h1 class="jumbotron">{{message}} </h1>
            
              <br>
             <input type="text" class="form-control" v-model="message">
            <br>
            <h3>
              Message From Vue: {{ ajax }}
            </h3> 
              <br>
            <ul class="list-group" v-for="post in posts">
              <li class="list-group-item list-group-item-success" @click="selectFruit(post.slug)">
                <div class="row">
                  <div class="col-md-3"><img class="img-circle img-responsive" src="http://lorempixel.com/100/100/abstract/6" alt=""></div>
                  <div class="col-md-9" v-html="post.title.rendered">
                    {{ post.title.rendered }}
                  </div>
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
  <div class="sidebar col-md-6 col-md-6">

    <?php //get_sidebar();  ?>
    
  </div>
</section> <!-- End Container --> 


  
  

  
  
  



<?php
get_footer();
