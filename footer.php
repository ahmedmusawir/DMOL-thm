<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */

?>
<?php wp_footer(); ?>



	<footer id="copyright" class="copyright  navbar navbar-inverse navbar-fixed-bottom">

		<p class="text-center">All Rights Reserved &copy; <?php echo date('Y'); ?>. <a class="hide" href="www.htmlfivedev.com">HTMLfiveDev.com</a></p>
			
	</footer>		

	

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.4/vue.js" type="text/javascript"></script>
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.3/vue-resource.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.slimscroll.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>

</body>
</html>
