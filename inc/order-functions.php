<?php

// ***************************************************************
// category on order   -   saját reportban is
// ***************************************************************

function category_woocommerce_order_item_name($name, $item)
{
    $product_id = $item['product_id'];
    $tax = 'product_cat';

    $terms = wp_get_post_terms($product_id, $tax, array('fields' => 'names'));

    if ($terms && !is_wp_error($terms)) {
        $taxonomy = get_taxonomy($tax);
        $name .=  implode(' , ', $terms);
    }

    return  $name;
}
add_filter('woocommerce_order_item_name', 'category_woocommerce_order_item_name', 10, 2);
