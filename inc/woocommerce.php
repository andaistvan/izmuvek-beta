<?php


add_theme_support('woocommerce');

// woocommerce breadcrump mods
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

/*
   cusotom archive product actions
*/

/*
   cusotom  product actions
*/
add_action('woo_header_breadcrump', 'woocommerce_breadcrumb');
add_action('single_title', 'woocommerce_template_single_title');
add_action('single_excerpt', 'woocommerce_template_single_excerpt');
add_action('single_addtocart', 'woocommerce_template_single_add_to_cart');
add_action('single_price', 'woocommerce_template_single_price');
// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
add_action('custom_addtocart', 'woocommerce_template_loop_add_to_cart');

// Display 30 products per page. Goes in functions.php
add_filter('loop_shop_per_page', create_function('$cols', 'return 30;'), 20);

add_action('woocommerce_before_main_content_wrapper', 'woocommerce_output_content_wrapper', 10);

// *
// *************************************************************************
// save admin date
// *************************************************************************
// *

// **********************************************************
// cart settings
// **********************************************************

add_action('woocommerce_after_shop_loop_item', 'my_custom_quantity_field', 6);
function my_custom_quantity_field()
{
    global $product;
    if (!$product->is_sold_individually()) {
        woocommerce_quantity_input(array(
      'min_value' => apply_filters('woocommerce_quantity_input_min', 1, $product),
      'max_value' => apply_filters('woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product),
    ));
    }
}

// **********************************************************
// add to cart text mod
// **********************************************************

add_filter('woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text');    // 2.1 +

function save_fields_admindate($cart_item_data, $product_id)
{
    if (isset($_REQUEST['wccaf_shippingdate'])) {
        $cart_item_data[ 'wccaf_shippingdate' ] = $_REQUEST['wccaf_shippingdate'];
    }

    return $cart_item_data;
}
add_action('woocommerce_add_cart_item_data', 'save_fields_admindate', 10, 2);

// remove product admin content editor
add_action('init', 'remove_content_editor');

function remove_content_editor()
{
    remove_post_type_support('product', 'editor');
}

// unset factory sorting

// Customizes the WooCommerce product sorting options
// Available options are: menu_order, rating, date, popularity, price, price-desc
function custom_woocommerce_product_sorting($orderby)
{
    // The following removes the rating, date, and the popularity sorting options;
  // feel free to customize and enable/disable the options as needed.
  unset($orderby['rating']);
    unset($orderby['date']);
    unset($orderby['popularity']);

    return $orderby;
}
add_filter('woocommerce_catalog_orderby', 'custom_woocommerce_product_sorting', 20);

// ***************************************************************
//
// ***************************************************************

/*
   fields factory column on woocommerce admin
*/
//Add custom column into Product Page
add_filter('manage_edit-product_columns', 'my_columns_into_product_list');
function my_columns_into_product_list($defaults)
{
    $defaults['wccaf_shippingdate'] = 'Rendelési nap';

    return $defaults;
}

//Add rows value into Product Page
add_action('manage_product_posts_custom_column', 'my_custom_column_into_product_list', 10, 2);
function my_custom_column_into_product_list($column, $post_id)
{
    switch ($column) {
    case 'wccaf_shippingdate':
        echo get_post_meta($post_id, 'wccaf_shippingdate', true);
    break;
    }
}

// sorting column content
add_filter('manage_edit-product_sortable_columns', 'sortable_columns');

// Make these columns sortable
function sortable_columns()
{
    return array(
                'wccaf_shippingdate' => 'wccaf_shippingdate',
            );
}

add_action('pre_get_posts', 'event_column_orderby');
function event_column_orderby($query)
{
    if (!is_admin()) {
        return;
    }
    $orderby = $query->get('orderby');
    if ('wccaf_shippingdate' == $orderby) {
        $query->set('meta_key', 'wccaf_shippingdate');
        $query->set('orderby', 'meta_value');
    }
}
// ***************************************************************
//  admin order
// ***************************************************************
/*
   fields factory Define columns position and names
*/
add_filter('manage_edit-shop_order_columns', 'MY_COLUMNS_FUNCTION');
function MY_COLUMNS_FUNCTION($columns)
{
    $new_columns = (is_array($columns)) ? $columns : array();
    unset($new_columns['order_actions']);

    //edit this for you column(s)
    //all of your columns will be added before the actions column
    $new_columns['MY_COLUMN_ID_1'] = 'custom column';
    $new_columns['MY_COLUMN_ID_2'] = 'MY_COLUMN_2_TITLE';
    //stop editing

    $new_columns['order_actions'] = $columns['order_actions'];

    return $new_columns;
}
/*
   For each custom column, show the values
*/
add_action('manage_shop_order_posts_custom_column', 'MY_COLUMNS_VALUES_FUNCTION', 2);
function MY_COLUMNS_VALUES_FUNCTION($column)
{
    global $post;
   //  $data = get_post_meta($post->ID);
   $data = get_post_meta(get_the_ID(), 'wccaf_shippingdate', true);

   //  start editing, I was saving my fields for the orders as custom post meta
   //  if you did the same, follow this code
    if ($column == 'MY_COLUMN_ID_1') {
        echo isset($data['MY_COLUMN_1_POST_META_ID']) ? $data['MY_COLUMN_1_POST_META_ID'] : '';
    }
    if ($column == 'MY_COLUMN_ID_2') {
        echo isset($data['MY_COLUMN_2_POST_META_ID']) ? $data['MY_COLUMN_2_POST_META_ID'] : '';
    }
    //stop editing
}
/*
   (optional) Function to make the columns sortable
*/
add_filter('manage_edit-shop_order_sortable_columns', 'MY_COLUMNS_SORT_FUNCTION');
function MY_COLUMNS_SORT_FUNCTION($columns)
{
    $custom = array(
        //start editing

        'MY_COLUMN_ID_1' => 'MY_COLUMN_1_POST_META_ID',
        'MY_COLUMN_ID_2' => 'MY_COLUMN_2_POST_META_ID',

        //stop editing
    );

    return wp_parse_args($custom, $columns);
}

// ***************************************************************
//
// ***************************************************************
// echo apply_filters('woocommerce_cart_item_name', sprintf('%s', $_product->get_title()), $cart_item, $cart_item_key);

// ***************************************************************
// my account translate title
// ***************************************************************
add_filter('gettext',  'translate_text');
add_filter('ngettext',  'translate_text');

function translate_text($translated)
{
    $translated = str_ireplace('Addresses',  'Címek',  $translated);

    return $translated;
}

add_filter('gettext',  'dashboard');
add_filter('ngettext',  'dashboard');

function dashboard($translated)
{
    $translated = str_ireplace('Dashboard',  'Vezérlőpult',  $translated);

    return $translated;
}

add_filter('gettext',  'nincs_megrendeles');
add_filter('ngettext',  'nincs_megrendeles');

function nincs_megrendeles($translated)
{
    $translated = str_ireplace('No order has been made yet',  'Jelenleg nincs megrendelésed',  $translated);

    return $translated;
}

add_filter('gettext',  'go_shop');
add_filter('ngettext',  'go_shop');

function go_shop($translated)
{
    $translated = str_ireplace('Go Shop',  'Vissza a főoldalra',  $translated);

    return $translated;
}

// ***************************************************************
// email oreder table
// ***************************************************************
// Edit order items table template defaults
// function sww_add_wc_order_email_images($table, $order)
// {
//     ob_start();
//
//     $template = $plain_text ? 'emails/plain/email-order-items.php' : 'emails/email-order-items.php';
//     wc_get_template($template, array(
//         'order' => $order,
//         'items' => $order->get_items(),
//         'show_download_links' => $show_download_links,
//         'show_sku' => $show_sku,
//         'show_purchase_note' => $show_purchase_note,
//         'show_image' => false,
//     ));
//
//     return ob_get_clean();
// }
// add_filter('woocommerce_email_order_items_table', 'sww_add_wc_order_email_images', 10, 2);

// ***************************************************************
// forma item inline issues
// ***************************************************************

function sww_edit_order_item_name($name)
{
    return '<div style="color:black;">'.$name.'</div></br>';
}
add_filter('woocommerce_order_item_name', 'sww_edit_order_item_name');

// ***************************************************************
// my account custom tab
// ***************************************************************
/**
 * @snippet       WooCommerce Add New Tab @ My Account
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=21253
 * @credits       https://github.com/woothemes/woocommerce/wiki/2.6-Tabbed-My-Account-page
 *
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 2.6.7
 */

// ------------------
// 1. Register new endpoint to use for My Account page
// Note: Resave Permalinks or it will give 404 error

function my_account_custom_tab_endpoint()
{
    add_rewrite_endpoint('nem_szeretm_osszetevok', EP_ROOT | EP_PAGES);
}

add_action('init', 'my_account_custom_tab_endpoint');

// // ------------------
// 2. Add new query var

function my_account_custom_tab_query_vars($vars)
{
    $vars[] = 'nem_szeretm_osszetevok';

    return $vars;
}

add_filter('query_vars', 'my_account_custom_tab_query_vars', 0);

// ------------------
// 3. Insert the new endpoint into the My Account menu

function my_account_custom_tab_link_my_account($items)
{
    $items['nem_szeretm_osszetevok'] = 'Nem szeretem összetevők';

    return $items;
}

add_filter('woocommerce_account_menu_items', 'my_account_custom_tab_link_my_account');

// ------------------
// 4. Add content to the new endpoint

function my_account_custom_tab_content()
{
    echo '<p>Nem szeretem összetevők...<br>hamarosan</p>';
   //  echo do_shortcode(' /* your shortcode here */ ');
}

add_action('woocommerce_account_nem_szeretm_osszetevok_endpoint', 'my_account_custom_tab_content');
