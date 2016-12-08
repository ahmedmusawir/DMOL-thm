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

<!DOCTYPE html>


  <div id="app" class="well">
    
    <h1 class="jumbotron">{{message}} </h1>
    
      <br>
   <input type="text" class="form-control" v-model="message">
  <br>
  <span>
    This is Message: {{message}}
  </span> 
    <br>
  <ul class="list-group" v-for="fruit in fruits">
    <li class="list-group-item list-group-item-success" @click="selectFruit(fruit)">
      {{fruit}}
    </li>
  </ul>
    
    
  </div>
  

  

  
  
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.4/vue.js"></script>
<script type="text/javascript">
	new Vue ({
  el: '#app',
  data: {
    message: 'Hello Vue 2.0',
    fruits: [ 'apple', 'Microsoft', 'VMware', 'OSx' ]
  },
  methods: {
    selectFruit(fruit) {
      this.message = fruit;
    }
  }
});
</script>


<?php
get_footer();
