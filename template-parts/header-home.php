

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
