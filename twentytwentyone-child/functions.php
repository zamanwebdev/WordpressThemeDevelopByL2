<?php
function zaman_child_theme(){
  wp_enqueue_style('zaman-child-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'zaman_child_theme', PHP_INT_MAX);
