<?php
//
// template name:orderteszt
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header();

 ?>


<section id="izpolitika" class="fullwidth">

   <div class="main-container">



 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <?php the_content(); ?>

    <?php endwhile; endif; ?>
</header>
<section style="background: white; padding:15px;">
<?php

global $woocommerce;

$args = array(
    'post_type' => 'shop_order',
    'post_status' => 'publish',
            'posts_per_page' => -1,
    'tax_query' => array(
                array(
                    'taxonomy' => 'shop_order_status',
                    'field' => 'slug',
                    'terms' => array('processing'),
                ),
            ),
);

$loop = new WP_Query($args);

while ($loop->have_posts()) : $loop->the_post();

    $order_id = $loop->post->ID;

    $order = new WC_Order($order_id);

    ?>
    <article>
        <header><br>
            <p style="color: black;">
               Megrendelés #<?php echo $order_id; ?> &mdash; <time datetime="<?php the_time('c'); ?>"><?php echo the_time('d/m/Y'); ?></time>;
               <?php _e('Email:', 'woothemes'); ?></strong> <?php echo $order->billing_email; ?>
               <?php _e('Name:', 'woothemes'); ?></strong> <?php echo $order->billing_first_name; ?>
            </p>
        </header>
        <table cellspacing="0" cellpadding="2">
            <thead>
                <tr>
                    <th scope="col" style="text-align:left;"><?php _e('Product', 'woothemes'); ?></th>
                    <th scope="col" style="text-align:left;">Kategória</th>
                    <th scope="col" style="text-align:left;"><?php _e('Quantity', 'woothemes'); ?></th>
                    <th scope="col" style="text-align:left;"><?php _e('Price', 'woothemes'); ?></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th scope="row" colspan="2" style="text-align:left; padding-top: 12px;"><?php _e('Subtotal:', 'woothemes'); ?></th>
                    <td style="text-align:left; padding-top: 12px;"><?php echo $order->get_subtotal_to_display(); ?></td>
                </tr>
                <?php if ($order->order_shipping > 0) : ?><tr>
                    <th scope="row" colspan="2" style="text-align:left;"><?php _e('Shipping:', 'woothemes'); ?></th>
                    <td style="text-align:left;"><?php echo $order->get_shipping_to_display(); ?></td>
                </tr><?php endif; ?>
                <?php if ($order->order_discount > 0) : ?><tr>
                    <th scope="row" colspan="2" style="text-align:left;"><?php _e('Discount:', 'woothemes'); ?></th>
                    <td style="text-align:left;"><?php echo woocommerce_price($order->order_discount); ?></td>
                </tr><?php endif; ?>
                <?php if ($order->get_total_tax() > 0) : ?><tr>
                    <th scope="row" colspan="2" style="text-align:left;"><?php _e('Tax:', 'woothemes'); ?></th>
                    <td style="text-align:left;"><?php echo woocommerce_price($order->get_total_tax()); ?></td>
                </tr><?php endif; ?>
                <tr>
                    <th scope="row" colspan="2" style="text-align:left;"><?php _e('Total:', 'woothemes'); ?></th>
                    <td style="text-align:left;"><?php echo woocommerce_price($order->order_total); ?> <?php _e('- via', 'woothemes'); ?> <?php echo ucwords($order->payment_method); ?></td>
                </tr>
            </tfoot>
            <tbody>
                <?php echo $order->email_order_items_table();?>


            </tbody>
        </table>

        <div style="clear:both;"></div>

        </article>
    <?php endwhile; ?>
    </section>


</div>
</section>


<?php
get_footer();
?>
