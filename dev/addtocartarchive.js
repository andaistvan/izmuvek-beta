
jQuery(function($) {
$('.input-text.qty', 'div').on('change', function() {
$(this).closest('div').next('a').attr('data-quantity', $(this).val());
});});


jQuery('button product_type_simple add_to_cart_button ajax_add_to_cart').click(function() {
    jQuery(this).append('<img src="http://smallenvelop.com/wp-content/uploads/2014/08/Preloader_3.gif" width="20px" height="20px"/>')
});
