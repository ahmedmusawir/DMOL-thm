<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<?php 
	$home_page_header_slider = get_field( 'home_page_header_slider', 6 );
?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-logo-social container-fluid">
			<?php
			    $front_header_image = get_field('front_header_image', 6); // 1476 is post id                               
			    $siteLogo = get_field('site_logo', 6); // 1476 is post id   

			    $header_facebook_icon = get_field('header_facebook_icon', 6); // 1476 is post id     
			    $header_facebook_link = get_field('header_facebook_link', 6);
			    $header_twitter_icon = get_field('header_twitter_icon', 6);
			    $header_twitter_link = get_field('header_twitter_link', 6);
			    $header_linkedin_icon = get_field('header_linkedin_icon', 6);       
			    $header_linkedin_link = get_field('header_linkedin_link', 6);   
			    $header_email_icon = get_field('header_email_icon', 6);   
			    $header_email_link = get_field('header_email_link', 6);             
			?>
		</div>


	
		<div class="navbar-container">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
	  		  <div class="container-fluid">

			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><img class="logo img-responsive" src="<?php echo $siteLogo; ?>" alt=""></span> </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-ex1-collapse">
					
					<ul class="header-social pull-right">
						<li><a target="_blank" href="<?php echo $header_facebook_link; ?>" target="_blank"><i class="fa fa-<?php echo $header_facebook_icon; ?> fa-2x"></i></a></li>				
						<!-- <li><a target="_blank" href="https://www.facebook.com/ina.nozek" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>				 -->
						<li><a target="_blank" href="<?php echo $header_twitter_link; ?>" target="_blank"><i class="fa fa-<?php echo $header_twitter_icon; ?> fa-2x"></i></a></li>				
						<!-- <li><a target="_blank" href="https://twitter.com/DoctorIna" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>				 -->
						<li><a target="_blank" href="<?php echo $header_linkedin_link; ?>" target="_blank"><i class="fa fa-<?php echo $header_linkedin_icon; ?> fa-2x"></i></a></li>				
						<!-- <li><a target="_blank" href="https://www.linkedin.com/in/inanozek" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>				 -->
						<li><a target="_blank" href="<?php echo $header_email_link; ?>"><i class="fa fa-<?php echo $header_email_icon; ?> fa-2x"></i></a></li>				
					</ul>

			    	
			        <?php
				        wp_nav_menu( array(
				            'theme_location' => 'primary',
				            'depth' => 2,
				            'container' => false,
				            'menu_class' => 'nav navbar-nav navbar-left',
				            'fallback_cb' => 'wp_page_menu',
				            //Process nav menu using our custom nav walker
				            'walker' => new wp_bootstrap_navwalker())
				        );
			        ?>

			    </div><!-- /.navbar-collapse --> 


	      		

	  		  </div><!-- /.container-fluid -->

			</nav>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

	
	<header id="front-pg-header">

		<?php if ( is_home() || is_archive() || is_search() || is_404() ) : ?>
			
			<?php echo $home_page_header_slider; ?>

		<?php elseif ( is_single() ) : ?>

			<section class="dr-nia-single-post-header">
		
				<h2><?php wp_title(); ?></h2>
				
			</section>

		<?php elseif ( is_page(array('news', 'videos')) ) : ?>

			<section class="dr-nia-single-post-header hide">
		
				<h2><?php wp_title(); ?></h2>
				
			</section>	

		<?php else : ?>

			<section class="dr-nia-page-header">
		
				<h1><?php wp_title(); ?></h1>
				
			</section>

		<?php endif; ?>
	

	</header>
	




















