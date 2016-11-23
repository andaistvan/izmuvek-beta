<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?><!DOCTYPE html>
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/trebi/dev/zurb/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/trebi/dev/zurb/bower_components/foundation-sites/dist/foundation.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/trebi/dev/zurb/js/app.js"></script>

<?php wp_head(); ?>
</head>

 <body <?php body_class(); ?>>
    <div id="page" class="site">

       <a id="anchor-slide"></a>
       <section id="slider-cont" class="fullwidth">
          <div class="main-container">
             <h2>slideshow</h2>
          </div><!-- main-container bg-white -->
       </section><!-- izpolitika -->

    <div data-sticky-container>
    	<header id="masthead" class="full" data-sticky data-options="marginTop:0;" data-top-anchor="slider-cont:bottom" data-btm-anchor="content:bottom" style="width:100%" role="banner">
          <div class="main-container">

             <!-- #site-navigation -->
             <nav id="site-navigation" class="main-navigation" role="navigation">
       			<?php wp_nav_menu(array('theme_location' => 'singlepage', 'menu_id' => 'single-page-nav')); ?>
       		</nav>
             <div class="account-toggler">
                <a><button class="account-cont" data-toggle="account-panel">
                   <i class="fa fa-info-circle" aria-hidden="true"></i>
                </button></a>

                <div class="callout" id="account-panel" style="display:none;" data-toggler data-animate="hinge-in-from-top hinge-out-from-top">
                   <?php get_template_part('template-parts/cart-panel'); ?>
                </div>
             </div>


             <!-- #site-navigation -->
             <?php dynamic_sidebar('infopanel'); ?>

          </div><!-- main-container -->
    	</header><!-- #masthead -->
    </div><!-- data-sticky-container -->



	<div id="content" class="site-content">
