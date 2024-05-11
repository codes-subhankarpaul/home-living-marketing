<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage hlm
 * @since hlm 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php hlm_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="custom-header">
		<div class="header-main">
		  <div class="container-fluid">
		    <nav class="navbar navbar-expand-lg py-0">
		      <a class="navbar-brand main-brand ms-0 py-0" href="<?php echo site_url(); ?>">
		        <img src="<?php echo get_theme_mod('header_logo'); ?>" alt="">
		      </a>
		      <div class="navbar-header me-0">
		        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
		          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
		          aria-label="Toggle navigation">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		      </div>
		      <div class="header-main-right-top-wrap">
		        <div class="collapse navbar-collapse" id="navbarSupportedContent">
		          <?php 
								wp_nav_menu(
									array(
										'menu'          	=> 'Header Menu',
										'depth'         	=> 3,
										'container'     	=> false,
										'menu_class'    	=> 'navbar-nav ms-auto mb-2 mb-lg-0',
										'theme_location' 	=> 'primary'
									)
								);
							?>
		        </div>
		        <div class="header-btn">
		          <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="custom-btn">Request a Quote <span><i class="las la-long-arrow-alt-right"></i></span></a>
		        </div>
		      </div>
				<div class="top-header-btn header-btn">
		          <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="custom-btn">Request a Quote <span><i class="las la-long-arrow-alt-right"></i></span></a>
		        </div>
		    </nav>
		  </div>
		</div>
	</header>