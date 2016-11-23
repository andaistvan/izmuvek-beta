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
             <div class="izmuvek-logo">
                <a href="<?php echo esc_url(home_url('/'));  ?>" rel="home">
                   <img src="<?php bloginfo('template_url'); ?>/dev/img/izmuvek-logo-white.svg" alt="izmuvek logo" />
               </a>
             </div>
          </div><!-- main-container bg-white -->
       </section><!-- izpolitika -->

    <div data-sticky-container>
    	<header id="masthead" class="full" data-sticky data-options="marginTop:0;" data-top-anchor="slider-cont:bottom" data-btm-anchor="content:bottom" data-sticky-on="small" style="width:100%" role="banner">
          <div class="main-container">

             <!-- #mobil-navigation -->
             <div class="mobil-button-box">
                <div class="mobil-button-cont" data-responsive-toggle="mobilnav-cont" data-hide-for="880px">
                   <button class="mobilmenu" type="button" data-toggle>menu</button>
                </div>
             </div>

            <!-- #mobil-navigation -->


             <!-- #site-navigation -->
             <nav id="site-navigation" class="main-navigation" role="navigation">
       			<?php wp_nav_menu(array('theme_location' => 'singlepage', 'menu_id' => 'single-page-nav')); ?>
       		</nav>
             <!-- #site-navigation -->

             <div id="mobilnav-cont">
                <?php wp_nav_menu(array('theme_location' => 'singlemobil', 'menu_id' => 'single-page-mobil-nav')); ?>
            </div> <!-- mobilnav-cont -->

            <div class="toggler-cont">
               <div class="account-toggler">
                  <a><button class="account-cont" data-toggle="account-panel">
                     <i class="fa fa-info-circle" aria-hidden="true"></i>
                  </button></a>

                  <div class="callout" id="account-panel" style="display:none;" data-toggler data-animate="hinge-in-from-top hinge-out-from-top">
                  </div>
               </div>
            </div><!-- toggler-cont -->
            <?php get_template_part('template-parts/cart-panel'); ?>








          </div><!-- main-container -->
    	</header><!-- #masthead -->
    </div><!-- data-sticky-container -->



	<div id="content" class="site-content">
