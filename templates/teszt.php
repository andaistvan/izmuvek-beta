<?php
/*
Template Name: teszt
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>
<a id="anchor-izpolitika"></a>
<section id="izpolitika" class="fullwidth">
   <div class="main-container">

      <div class="column-3">
         <div class="item">
            <h2>normál</h2>
         </div>
         <div class="item">
            <h2>paleo</h2>
         </div>
         <div class="item">
            <h2>vega</h2>
         </div>
      </div><!-- 3column -->

   </div>

</section><!-- izpolitika -->


<!-- wrap copy -->
<!-- rendeles -->
<a id="anchor-rendeles"></a>
<section id="rendeles2" class="fullwidth">
   <div class="main-container">

      <!-- <h2 class="menu-title">Menü</h2> -->
      <!-- tabs head -->
      <ul class="tabs" data-tabs id="example-tabs">
        <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">
           <h2 class="week-datas">
             <?php echo date('W.', strtotime('this week'));?> hét
             <?php echo date('m.d. - ', strtotime('Monday this week')), date('m.d.', strtotime('Friday this week'));?>
          </h2><!-- week-datas --></a></li>
        <li class="tabs-title"><a href="#panel2">
           <h2 class="week-datas">
              <?php echo date('W.', strtotime('this week +1 week'))  ?> hét
              <?php echo date('m.d. - ', strtotime('Monday next week')), date('m.d.', strtotime('Friday next week'))?>
           </h2><!-- week-datas -->
        </a></li>
      </ul>
      <!-- tabs head -->
      <!-- tabs content -->
      <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel is-active" id="panel1">
           <div class="menu-desktop">
             <?php get_template_part('template-parts/menu-current-week-desktop') ?>
           </div>
           <div class="menu-mobil">
           </div>
        </div>
        <div class="tabs-panel" id="panel2">
           <div class="menu-desktop">
              <?php get_template_part('template-parts/menu-next-week-desktop') ?>
           </div>
           <div class="menu-mobil">
              <?php get_template_part('template-parts/menu-next-week') ?>
           </div>
        </div>
      </div>
      <!-- tabs content -->
   </div><!-- main-container bg-white -->
</section>
<!-- rendeles -->

<a id="anchor-fizetes-szallitas"></a>
<section id="fizetes-szallitas" class="fullwidth">
   <div class="main-container">
      <h1>fizetés-szállítás</h1>
      <h1>hogyan rendelhetek?</h1>
   </div><!-- main-container bg-white -->
</section><!-- fizetes-szallitas -->

<a id="anchor-kapcsolat"></a>
<section id="kapcsolat" class="fullwidth">
   <div class="main-container">
      <h1>Kapcsolat</h1>
   </div><!-- main-container bg-white -->
</section><!-- kapcsolat -->

<?php
get_footer();
?>
