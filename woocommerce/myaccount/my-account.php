<?php
/**
 * My Account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 *
 * @author  WooThemes
 *
 * @version 2.6.0
 */
if (!defined('ABSPATH')) {
    exit;
}

wc_print_notices();

/*
 * My Account navigation.
 * @since 2.6.0
 */
do_action('woocommerce_account_navigation'); ?>

<div class="woocommerce-MyAccount-content">
	<?php
        /**
         * My Account content.
         *
         * @since 2.6.0
         */
        do_action('woocommerce_account_content');
    ?>
</div>

<?php
/**
 * My Account.
 */
// add_action( 'woocommerce_account_navigation', 'woocommerce_account_navigation' );
// add_action( 'woocommerce_account_content', 'woocommerce_account_content' );
// add_action( 'woocommerce_account_orders_endpoint', 'woocommerce_account_orders' );
// add_action( 'woocommerce_account_view-order_endpoint', 'woocommerce_account_view_order' );
remove_action('woocommerce_account_downloads_endpoint', 'woocommerce_account_downloads');
// add_action( 'woocommerce_account_edit-address_endpoint', 'woocommerce_account_edit_address' );
// add_action( 'woocommerce_account_payment-methods_endpoint', 'woocommerce_account_payment_methods' );
// add_action( 'woocommerce_account_add-payment-method_endpoint', 'woocommerce_account_add_payment_method' );
// add_action( 'woocommerce_account_edit-account_endpoint', 'woocommerce_account_edit_account' );
