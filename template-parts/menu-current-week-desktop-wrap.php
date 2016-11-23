<?php
global $product, $wc_cpdf;

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
   'meta_key' => 'wccaf_shippingdate',
   'product_cat' => 'husos, paleo, vega',
   'orderby' => 'category',
   'order' => 'ASC',
   'nopaging' => true,
);
$current_week_all_cat = new WP_Query($args);

$rendelheto = array(
   'meta_query' => array(
      array(
         'key' => 'wccaf_shippingdate',
         'value' => array(date('', strtotime('next day 14 hour')), date('Ymd', strtotime('last Friday next month'))),
         'compare' => 'BETWEEN',
         'type' => 'DATE',
      ),
   ),
   'post_type' => 'product',
   'meta_key' => 'wccaf_shippingdate',
);

$rendeles_datum = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
$rendelheto = date('Y.m.d. - h', strtotime('midnight today + 14 hour'));
// echo date('m.d. - ', strtotime('Monday this week')), date('m.d.', strtotime('Friday this week'));

?>



<div class="category-per-week-cont">
<ul class="products-wrap" id="current-week-desk-wrap">
   <?php

      if ($current_week_all_cat->have_posts()) {
          while ($current_week_all_cat->have_posts()) {
              ($current_week_all_cat->the_post());
              do_action('start_li_element', 'render_li_flex_order_desktop');

              echo'<div class="product-top">';
              echo '<div class="prod-title">';
            //   echo get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
              do_action('woocommerce_shop_loop_item_title');
              echo '</div>';
              echo '</div>';

              echo '<div class="order-panel">';
              echo '<div class="cart-contbox">';
              $current_kaja_date = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);
              if ($rendelheto < $current_kaja_date) {
                  do_action('woocommerce_after_shop_loop_item', 'my_custom_quantity_field', 6);
              } else {
                  echo 'nem rendelhető';
              }
             // echo '<br>--------------';
              echo '</div>';//cart-contboxl end
              echo '</div>';//order-panel end

              echo '</li>';
          }
      }
   wp_reset_postdata();
   ?>
</ul>
</div>
