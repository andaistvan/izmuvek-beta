<?php
/**
 * Lost password confirmation text.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/lost-password-confirmation.php.
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
wc_print_notice(__('A jelszó visszaállító email el lett küldve.', 'woocommerce'));
?>

<p><?php echo apply_filters('woocommerce_lost_password_message', __('A jelszó visszaállító email el lett küldve a fiókadatokban található email címre, de előfordulhat, hogy várni kell rá néhány percet. Kérlek várj legalább 10 percet, mielőtt új visszaállítást kezdeményezel.', 'woocommerce')); ?></p>
