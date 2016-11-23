<?php


// ***************************************************************
// curret week sorting
// ***************************************************************

add_action('start_li_element', 'render_li_flex_order_desktop');

function render_li_flex_order_desktop()
{
    $current_kaja_date = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);

    global $post, $product;
    $categ = strip_tags($product->get_categories());
    $prod_cat_kaja = $categ;

    if (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Monday this week')))) {
        echo '<li class="product" style="order:1;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">1<br></p>';
    } elseif (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Tuesday this week')))) {
        echo '<li class="product" style="order:2;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">2<br></p>';
    } elseif (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Wednesday this week')))) {
        echo '<li class="product" style="order:3;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">3<br></p>';
    } elseif (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Thursday this week')))) {
        echo '<li class="product" style="order:4;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">4<br></p>';
    } elseif (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Friday this week')))) {
        echo '<li class="product" style="order:5;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">5<br></p>';
    }

    if (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Monday this week')))) {
        echo '<li class="product" style="order:6;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">6<br></p>';
    } elseif (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Tuesday this week')))) {
        echo '<li class="product" style="order:7;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">7<br></p>';
    } elseif (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Wednesday this week')))) {
        echo '<li class="product" style="order:8;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">8<br></p>';
    } elseif (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Thursday this week')))) {
        echo '<li class="product" style="order:9;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">9<br></p>';
    } elseif (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Friday this week')))) {
        echo '<li class="product" style="order:10;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">10<br></p>';
    }

    if (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Monday this week')))) {
        echo '<li class="product" style="order:11;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">11<br></p>';
    } elseif (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Tuesday this week')))) {
        echo '<li class="product" style="order:12;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">12<br></p>';
    } elseif (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Wednesday this week')))) {
        echo '<li class="product" style="order:13;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">13<br></p>';
    } elseif (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Thursday this week')))) {
        echo '<li class="product" style="order:14;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">14<br></p>';
    } elseif (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Friday this week')))) {
        echo '<li class="product" style="order:15;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">15<br></p>';
    }
}

// ***************************************************************
// next week sorting
// ***************************************************************
add_action('start_li_element', 'render_li_flex_order_nextweek_desktop');

function render_li_flex_order_nextweek_desktop()
{
    $current_kaja_date = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);

    global $post, $product;
    $categ = strip_tags($product->get_categories());
    $prod_cat_kaja = $categ;

    if (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Monday next week')))) {
        echo '<li class="product" style="order:1;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">1<br></p>';
    } elseif (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Tuesday next week')))) {
        echo '<li class="product" style="order:2;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">2<br></p>';
    } elseif (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Wednesday next week')))) {
        echo '<li class="product" style="order:3;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">3<br></p>';
    } elseif (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Thursday next week')))) {
        echo '<li class="product" style="order:4;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">4<br></p>';
    } elseif (($prod_cat_kaja == 'húsos') && ($current_kaja_date == date('Y.m.d.', strtotime('Friday next week')))) {
        echo '<li class="product" style="order:5;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">5<br></p>';
    }

    if (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Monday next week')))) {
        echo '<li class="product" style="order:6;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">6<br></p>';
    } elseif (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Tuesday next week')))) {
        echo '<li class="product" style="order:7;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">7<br></p>';
    } elseif (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Wednesday next week')))) {
        echo '<li class="product" style="order:8;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">8<br></p>';
    } elseif (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Thursday next week')))) {
        echo '<li class="product" style="order:9;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">9<br></p>';
    } elseif (($prod_cat_kaja == 'paleo') && ($current_kaja_date == date('Y.m.d.', strtotime('Friday next week')))) {
        echo '<li class="product" style="order:10;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">10<br></p>';
    }

    if (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Monday next week')))) {
        echo '<li class="product" style="order:11;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">11<br></p>';
    } elseif (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Tuesday next week')))) {
        echo '<li class="product" style="order:12;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">12<br></p>';
    } elseif (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Wednesday next week')))) {
        echo '<li class="product" style="order:13;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">13<br></p>';
    } elseif (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Thursday next week')))) {
        echo '<li class="product" style="order:14;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">14<br></p>';
    } elseif (($prod_cat_kaja == 'vega') && ($current_kaja_date == date('Y.m.d.', strtotime('Friday next week')))) {
        echo '<li class="product" style="order:15;">';
      //   echo '<p class="day-number" style="color: green; font-size: 18px; font-weight:bold;">15<br></p>';
    }
}

add_action('after_start_li_element', 'show_product_category');
function show_product_category()
{
    global $post, $product;
    $categ = strip_tags($product->get_categories());
    echo $categ;
}
