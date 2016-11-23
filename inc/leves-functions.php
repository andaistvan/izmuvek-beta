<?php

// ***************************************************************
// admin meta field jelenjen meg ha nem üres
// ***************************************************************
// add_action('woocommerce_after_shop_loop_item', 'leves_render', 1);
// function leves_render()
// {
//     echo '<div class="leves-container" style="display:block; flex-basis: 100%; flex-grow:2;">';
//     $kaja_id = get_the_ID();
//    //  echo $kaja_id;
//     echo get_post_meta(get_the_ID(), 'wccaf_levesselect', true);
//     echo get_post_meta(get_the_ID(), 'wccaf_levesnev', true);
//
//     echo '<div id="leves'.$kaja_id.'"></div>';
//
//     echo '</div>';
// }
