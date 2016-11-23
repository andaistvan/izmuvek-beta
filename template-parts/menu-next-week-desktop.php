<?php

$args = array(
   'meta_query' => array(
      array(
         'key' => 'wccaf_shippingdate',
         'value' => array(date('Ymd', strtotime('Monday next week')), date('Ymd', strtotime('Friday next week'))),
         'compare' => 'BETWEEN',
         'type' => 'DATE',
      ),
   ),
   'post_type' => 'product',
   'meta_key' => 'wccaf_shippingdate',
   'orderby' => 'meta_value',
   'product_cat' => 'husos',
   'order' => 'ASC',
);
$current_week_husos = new WP_Query($args);

$args = array(
   'meta_query' => array(
      array(
         'key' => 'wccaf_shippingdate',
         'value' => array(date('Ymd', strtotime('Monday next week')), date('Ymd', strtotime('Friday next week'))),
         'compare' => 'BETWEEN',
         'type' => 'DATE',
      ),
   ),
   'post_type' => 'product',
   'meta_key' => 'wccaf_shippingdate',
   'orderby' => 'meta_value',
   'product_cat' => 'paleo',
   'order' => 'ASC',
);
$current_week_paleo = new WP_Query($args);

$args = array(
   'meta_query' => array(
      array(
         'key' => 'wccaf_shippingdate',
         'value' => array(date('Ymd', strtotime('Monday next week')), date('Ymd', strtotime('Friday next week'))),
         'compare' => 'BETWEEN',
         'type' => 'DATE',
      ),
   ),
   'post_type' => 'product',
   'meta_key' => 'wccaf_shippingdate',
   'orderby' => 'meta_value',
   'product_cat' => 'vega',
   'order' => 'ASC',
);
$current_week_vega = new WP_Query($args);

?>
<div class="category-per-week-cont">
   <h3 class="category-label">Klasszik</h3>
   <ul class="products-week-desktop">
      <?php

         if ($current_week_husos->have_posts()) {
             while ($current_week_husos->have_posts()) {
                 ($current_week_husos->the_post());
                 echo '<li class="product bg-rendeles-gray">';
                 echo '<div class=product-top>';
                 echo '<div class=product-title>';
                 do_action('woocommerce_shop_loop_item_title');
                     //   echo get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
                     //   echo get_post_meta(get_the_ID(), 'my_field_name', true);
                 echo '</div>'; //product-title
                 echo '</div>'; //product-top

                 echo '<div class="order-panel">';
                 echo '<div class="cart-contbox">';
                 $current_kaja_date = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
                 if ($rendelheto < $current_kaja_date) {
                     do_action('woocommerce_after_shop_loop_item', 'my_custom_quantity_field', 6);
                 } else {
                     echo '<p class="nem-rendelheto">nem rendelhető</p>';
                 }
                 echo '</div>';//cart-contboxl end
                 echo '</div>';//order-panel end

                 echo '</li>';
             }
         }
      wp_reset_postdata();
      ?>
   </ul>
</div><!-- category-per-week-cont - húsos END-->


<div class="category-per-week-cont">
   <h3 class="category-label">Paleo</h3>
   <ul class="products-week-desktop">
      <?php

         if ($current_week_paleo->have_posts()) {
             while ($current_week_paleo->have_posts()) {
                 ($current_week_paleo->the_post());
                 echo '<li class="product" style="background: white;">';
                 echo '<div class=product-top>';
                 echo '<div class=product-title>';
                 do_action('woocommerce_shop_loop_item_title');
                     //   echo get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
                     //   echo get_post_meta(get_the_ID(), 'my_field_name', true);
                 echo '</div>'; //product-title
                 echo '</div>'; //product-top

                 echo '<div class="order-panel">';
                 echo '<div class="cart-contbox">';
                 $current_kaja_date = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
                 if ($rendelheto < $current_kaja_date) {
                     do_action('woocommerce_after_shop_loop_item', 'my_custom_quantity_field', 6);
                 } else {
                     echo '<p class="nem-rendelheto">nem rendelhető</p>';
                 }
                 echo '</div>';//cart-contboxl end
                 echo '</div>';//order-panel end

                 echo '</li>';
             }
         }
      wp_reset_postdata();
      ?>
   </ul>
</div><!-- category-per-week-cont - paleo END-->


<div class="category-per-week-cont">
   <h3 class="category-label">Klasszik</h3>
   <ul class="products-week-desktop">
      <?php

         if ($current_week_vega->have_posts()) {
             while ($current_week_vega->have_posts()) {
                 ($current_week_vega->the_post());
                 echo '<li class="product bg-rendeles-gray">';
                 echo '<div class=product-top>';
                 echo '<div class=product-title>';
                 do_action('woocommerce_shop_loop_item_title');
                     //   echo get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
                     //   echo get_post_meta(get_the_ID(), 'my_field_name', true);
                 echo '</div>'; //product-title
                 echo '</div>'; //product-top

                 echo '<div class="order-panel">';
                 echo '<div class="cart-contbox">';
                 $current_kaja_date = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
                 if ($rendelheto < $current_kaja_date) {
                     do_action('woocommerce_after_shop_loop_item', 'my_custom_quantity_field', 6);
                 } else {
                     echo '<p class="nem-rendelheto">nem rendelhető</p>';
                 }
                 echo '</div>';//cart-contboxl end
                 echo '</div>';//order-panel end

                 echo '</li>';
             }
         }
      wp_reset_postdata();
      ?>
   </ul>
</div><!-- category-per-week-cont - vega END-->
