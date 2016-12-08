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


		<div class="footer-container">

			<footer id="footer-main" class="footer-main hide">

			<section class="footer-body  container">
				
				<div class="row">
				

					<article class="img-box col-md-3">

						<aside id="text-2" class="widget-footer-container widget_text">

							<?php 
								if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
									echo "Please Add a Widget Here";
								}

								dynamic_sidebar( 'footer-sidebar-1' ); 

							?>

					   	</aside>

					
					</article>

					<article class="img-box col-md-3">

						<aside id="nav_menu-2" class="widget-footer-container widget_nav_menu">

							<?php 

								if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
									echo "Please Add a Widget Here";
								}

								dynamic_sidebar( 'footer-sidebar-2' ); 

							?>
					      
					    </aside>

					</article>
		 
					<article class="img-box col-md-3">

						<aside id="nav_menu-2" class="widget-footer-container widget_nav_menu">

							<?php 

								if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {
									echo "Please Add a Widget Here";
								}

								dynamic_sidebar( 'footer-sidebar-3' ); 

							?>
					      
					    </aside>

					</article>
					<article class="img-box col-md-3">

						<aside id="nav_menu-2" class="widget-footer-container widget_nav_menu">

							<?php 

								if ( ! is_active_sidebar( 'footer-sidebar-4' ) ) {
									echo "Please Add a Widget Here";
								}

								dynamic_sidebar( 'footer-sidebar-4' ); 

							?>
					      
					    </aside>

					</article>		 

			</div> <!-- TOP 2 FOOTER WIDGET CONTAINER -->


			</section> <!-- FOOTER BODY ENDS -->


		</footer>

		<div id="copyright" class="copyright">
				<p class="text-center">All Rights Reserved &copy; <?php echo date('Y'); ?>. <a class="hide" href="www.htmlfivedev.com">HTMLfiveDev.com</a></p>
		</div>		
	</div> <!-- FOOTER CONTAINER ENDED -->

	

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.4/vue.js" type="text/javascript"></script>
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.3/vue-resource.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>

</body>
</html>
