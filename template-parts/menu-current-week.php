<?php
global $product, $wc_cpdf;

// napok csoportosítása
$args = array(
   'meta_query' => array(
      array(
         'key' => 'wccaf_shippingdate',
         'value' => array(date('Ymd', strtotime('Monday this week')), date('Ymd', strtotime('Friday this week'))),
         'compare' => 'BETWEEN',
         'type' => 'DATE',
      ),
   ),
   'post_type' => 'product',
   'nopaging' => true,
   'meta_key' => 'wccaf_shippingdate',
   'orderby' => 'meta_value',
   // 'Include' => '14,15,13',
   'order' => 'ASC',
   // 'groupby' => 'wccaf_shippingdate',
);
$loop3 = new WP_Query($args);

?>
<?php
// $rendeles_datum_mobil = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
// $rendelheto_mobil = date('Y.m.d. - h', strtotime('midnight next day + 14 hour'));
//
//
// $current_kaja_date_mobil = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
// if ($rendelheto_mobil < $current_kaja_date) {
//    get_template_part('menu-current-week-content-mobil');
// } else {
//     echo '<p class="nem-rendelheto">nem rendelhető</p>';
// }
 ?>

 <ul class="products-mobil">

 <?php
 $dategroup = '';

    if ($loop3->have_posts()) {
        while ($loop3->have_posts()) : $loop3->the_post();

        $postdate = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);

        if ($postdate != $dategroup) {
            // In that case, this is a new date that hasn't yet been displayed
    // So, we output the title...
            echo '<li class="day">';

          //   echo '<h4>'.$postdate.'</h4>';

            $newDateString = (date_format(date_create_from_format('Y.m.d.', $postdate),  ' d. l'));
    // ...and change the stored date for the current group
    $dategroup = $postdate;
    //  product per day
 ?>



<?php

$rendelheto_mobil = date('Y.m.d. - h', strtotime('midnight next day + 14 hour'));

            $current_kaja_date_mobil = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
            if ($rendelheto_mobil > $current_kaja_date_mobil) {
                //  echo 'nem rendelhető';
            } else {
                echo '<div class="current-day">';
                $actual_day_name = (date_format(date_create_from_format('Y.m.d.', $postdate), 'l'));

                if ($actual_day_name == 'Monday') {
                    echo '<h4>Hétfő</h4>';
                } elseif ($actual_day_name == 'Tuesday') {
                    echo '<h4>Kedd</h4>';
                } elseif ($actual_day_name == 'Wednesday') {
                    echo '<h4>Szerda</h4>';
                } elseif ($actual_day_name == 'Thursday') {
                    echo '<h4>Csütörtök</h4>';
                } elseif ($actual_day_name == 'Friday') {
                    echo '<h4>Péntek</h4>';
                } else {
                    echo 'hétvége';
                }
                echo '</div>';

                echo '<ul class="daily-product-cont">';
                $husos_query = new WP_Query(
 array(
 'post_type' => 'product',
 'meta_key' => 'wccaf_shippingdate',
 'meta_value' => $dategroup,
 'product_cat' => 'husos',
 )
 );

                $paleo_query = new WP_Query(
 array(
 'post_type' => 'product',
 'meta_key' => 'wccaf_shippingdate',
 'meta_value' => $dategroup,
 'product_cat' => 'paleo',
 )
 );

                $vega_query = new WP_Query(
 array(
 'post_type' => 'product',
 'meta_key' => 'wccaf_shippingdate',
 'meta_value' => $dategroup,
 'product_cat' => 'vega',
 )
 );
                ?>
 <?php  if ($husos_query->have_posts()) {
     while ($husos_query->have_posts()) {
         ($husos_query->the_post());
         ?>
 <li class="product-mobil">
 <!-- // top block -->
 <?php global $product;
         ?>
 <div class="cat-name-mobil">
    <?php
    global $product;
         $prodcat_factory = $product->get_categories();
         if ($prodcat_factory = 'húsos') {
             echo '<p class=kaja-category>klasszik</p>';
         }
         ?>
 </div><!-- // cat-name-mobil -->


 <div class="prod-cont-mobil">
    <div class="product-title-mobil">
       <?php do_action('woocommerce_shop_loop_item_title') ?>
    </div><!-- product-title-mobil -->

    <div class="order-panel">
       <?php

       echo '<div class="cart-contbox">';
         do_action('woocommerce_after_shop_loop_item', 'my_custom_quantity_field', 6);

         echo '</div>';//cart-contboxl end

       ?>
    </div><!-- // order-panel -->
 </div><!-- // prod-cont-mobil -->


 <?php get_template_part('template-parts/cart-quantity');
         ?>

 </li><!-- // li product -->
 <?php

     } // end while
 } // end if
 wp_reset_postdata();
                ?>

 <!-- ********* PALEO ********* -->
 <!-- ********* PALEO ********* -->
 <!-- ********* PALEO ********* -->

 <?php  if ($paleo_query->have_posts()) {
     while ($paleo_query->have_posts()) {
         ($paleo_query->the_post());
         ?>
          <li class="product-mobil">
          <!-- // top block -->
          <?php global $product;
         ?>
          <div class="cat-name-mobil">
             <?php echo '<p class=kaja-category>'.strip_tags($product->get_categories()).'</p>';
         ?>
          <?php

          ?>
          </div><!-- // cat-name-mobil -->


          <div class="prod-cont-mobil">
             <div class="product-title-mobil">
                <?php do_action('woocommerce_shop_loop_item_title') ?>
             </div><!-- product-title-mobil -->

             <div class="order-panel">
                <?php

                echo '<div class="cart-contbox">';
         $current_kaja_date = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
         if ($rendelheto < $current_kaja_date) {
             do_action('woocommerce_after_shop_loop_item', 'my_custom_quantity_field', 6);
         } else {
             echo '<p class="nem-rendelheto">nem rendelhető</p>';
         }
         echo '</div>';//cart-contboxl end

                ?>
             </div><!-- // order-panel -->
          </div><!-- // prod-cont-mobil -->


          <?php get_template_part('template-parts/cart-quantity');
         ?>

          </li><!-- // li product -->
 <?php

     } // end while
 } // end if
 wp_reset_postdata();
                ?>

 <!-- ********* vega ********* -->
 <!-- ********* vega ********* -->
 <!-- ********* vega ********* -->

 <?php  if ($vega_query->have_posts()) {
     while ($vega_query->have_posts()) {
         ($vega_query->the_post());
         ?>
          <li class="product-mobil">
          <!-- // top block -->
          <?php global $product;
         ?>
          <div class="cat-name-mobil">
             <?php echo '<p class=kaja-category>'.strip_tags($product->get_categories()).'</p>';
         ?>
          <?php

          ?>
          </div><!-- // cat-name-mobil -->


          <div class="prod-cont-mobil">
             <div class="product-title-mobil">
                <?php do_action('woocommerce_shop_loop_item_title') ?>
             </div><!-- product-title-mobil -->

             <div class="order-panel">
                <?php

                echo '<div class="cart-contbox">';
         $current_kaja_date = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
         if ($rendelheto < $current_kaja_date) {
             do_action('woocommerce_after_shop_loop_item', 'my_custom_quantity_field', 6);
         } else {
             echo '<p class="nem-rendelheto">nem rendelhető</p>';
         }
         echo '</div>';//cart-contboxl end

                ?>
             </div><!-- // order-panel -->
          </div><!-- // prod-cont-mobil -->


          <?php get_template_part('template-parts/cart-quantity');
         ?>

          </li><!-- // li product -->
 <?php

     } // end while
 } // end if
 wp_reset_postdata();
                ?>

</ul>
 <!-- napikaja_cont -->
<?php

            } //************** else vége

            ?>

       <?php

        }   // postdate ciklus

           echo '</li>';

        endwhile;
    } else {
        echo 'jájj';
    }
             wp_reset_postdata();
    ?>

 </ul><!-- products-mobil -->
