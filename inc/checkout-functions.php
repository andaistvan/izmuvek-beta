<?php


// Tutorial: http://www.skyverge.com/blog/change-woocommerce-return-to-shop-button/
function skyverge_change_empty_cart_button_url()
{
    return get_site_url('http://izmuvek.hu/#anchor-fizetes-szallitas');
    //Can use any page instead, like return '/sample-page/';
}
add_filter('woocommerce_return_to_shop_redirect', 'skyverge_change_empty_cart_button_url');
