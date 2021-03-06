<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 *
 * @author  WooThemes
 *
 * @version 2.5.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

global $product; ?>

<li>
   <div class="title-box">
      <span class="product-title"><?php echo $product->get_title(); ?></span>
   </div><!-- title-box -->
	<?php echo $product->get_price_html(); ?>
   <?php do_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart') ?>
</li>
