<?php

http://stackoverflow.com/questions/25644420/show-product-meta-in-order-items-table-in-order-details/25645735#25645735

// Save the field
add_action('woocommerce_process_product_meta', 'wccaf_shippingdate_woo_add_custom_general_fields_save');

function wccaf_shippingdate_woo_add_custom_general_fields_save($post_id)
{
    $woocommerce_number_field = $_POST['wccaf_shippingdate'];
    if (!empty($woocommerce_number_field)) {
        update_post_meta($post_id, 'wccaf_shippingdate', esc_attr($woocommerce_number_field));
    }
}

// Store custom field
add_action('woocommerce_add_cart_item_data', 'save_wccaf_shippingdate_field', 10, 2);

function save_wccaf_shippingdate_field($cart_item_data, $product_id)
{
    $special_item = get_post_meta($product_id, 'wccaf_shippingdate', true);
    if (!empty($special_item)) {
        $cart_item_data[ 'wccaf_shippingdate' ] = $special_item;

        // below statement make sure every add to cart action as unique line item
        $cart_item_data['unique_key'] = md5(microtime().rand());
        WC()->session->set('wccaf_shippingdate', $special_item);
    }

    return $cart_item_data;
}

// Render meta on cart and checkout
add_filter('woocommerce_get_item_data', 'rendering_wccaf_shippingdate_meta_field_on_cart_and_checkout', 10, 2);

function rendering_wccaf_shippingdate_meta_field_on_cart_and_checkout($cart_data, $cart_item)
{
    $custom_items = array();
    // Woo 2.4.2 updates
    if (!empty($cart_data)) {
        $custom_items = $cart_data;
    }
    if (isset($cart_item['wccaf_shippingdate'])) {
        $custom_items[] = array('name' => __('Dátum', 'woocommerce'), 'value' => $cart_item['wccaf_shippingdate']);
      //  $custom_items[] = array('name' => __('Dátum', 'woocommerce'), 'value' => $cart_item['wccaf_shippingdate']);
    }

    return $custom_items;
}
