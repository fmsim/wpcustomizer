<?php
  function wpcustomizer_styles_scripts() {
    /** Register styles **/
    wp_register_style( 'main-style', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    wp_register_style( 'style', get_stylesheet_uri() );
    /** Enqueue style**/
    wp_enqueue_style('main-style');
    wp_enqueue_style('style');
  }
  add_action( 'wp_enqueue_scripts', 'wpcustomizer_styles_scripts' );
