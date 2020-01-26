<?php

function load_scripts() {
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css', false, '1.0', 'all');

    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('post-thumbnails');

?>