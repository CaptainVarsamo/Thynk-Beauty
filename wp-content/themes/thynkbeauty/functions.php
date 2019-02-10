<?php
function thynkbeauty_enqueue_styles() {

  $parent_style = 'virtue'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('thynkbeauty',    get_stylesheet_directory_uri() . '/style.css',
    [$parent_style],
    wp_get_theme()->get('Version')
  );
  wp_enqueue_style( 'thynkbeautyfonts', esc_url_raw( '//cloud.typenetwork.com/projects/1432/fontface.css' ), array(), null );
  wp_enqueue_script( 'script', get_template_directory_uri() . '../../thynkbeauty/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
  wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery' ) );

}
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');

add_action('wp_enqueue_scripts', 'thynkbeauty_enqueue_styles');
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );    function wcs_woo_remove_reviews_tab($tabs) {    unset($tabs['reviews']);    return $tabs;}

add_filter( 'woocommerce_product_tabs', 'woo_rename_tab', 98);
function woo_rename_tab($tabs) {
  $tabs['description']['title'] = 'Principle';
  return $tabs;
}

// Hide trailing zeros on prices.
add_filter( 'woocommerce_price_trim_zeros', 'wc_hide_trailing_zeros', 10, 1 );
function wc_hide_trailing_zeros( $trim ) {

  return true;

}



add_action( 'woocommerce_no_products_found', function(){
  remove_action( 'woocommerce_no_products_found', 'wc_no_products_found', 10 );

  // HERE change your message below
  $message = __( 'No products were found matching your selection.', 'woocommerce' );

  echo '<p class="woocommerce-info">' . $message .'</p>';
}, 9 );
