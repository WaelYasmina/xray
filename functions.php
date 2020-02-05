<?php

function load_scripts() {
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css', false, '1.0', 'all');

    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('post-thumbnails');

function wpdocs_custom_excerpt_length() {
    return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length');

function wpdocs_excerpt_more() {
    return '<a href=' . get_the_permalink() . '>Read More</a>';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

?>