<?php
function thynkbeauty_enqueue_styles() {

  $parent_style = 'virtue'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('thynkbeauty',
    get_stylesheet_directory_uri() . '/style.css',
    [$parent_style],
    wp_get_theme()->get('Version')
  );
//  wp_enqeue_style('style', '//cloud.typenetwork.com/projects/1432/fontface.css', 'all');
  wp_enqueue_style( 'thynkbeautyfonts', esc_url_raw( '//cloud.typenetwork.com/projects/1432/fontface.css' ), array(), null );

}

add_action('wp_enqueue_scripts', 'thynkbeauty_enqueue_styles');


