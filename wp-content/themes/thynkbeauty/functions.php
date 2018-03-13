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
