<?php
// remove product images
add_filter('woocommerce_cart_item_thumbnail', '__return_false');

function sv_remove_cart_product_link($product_link, $cart_item, $cart_item_key)
{
    $product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

    return $product->get_title();
}
add_filter('woocommerce_cart_item_name', 'sv_remove_cart_product_link', 10, 3);

// ***************************************************************
// emptey cart
// ***************************************************************
