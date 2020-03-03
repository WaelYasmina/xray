<?php

function load_scripts() {
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css', false, '1.0', 'all');
    
    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('script2'), false, true);

    wp_register_script('script2', get_template_directory_uri() . '/js/scripts2.js', array(), false, true);

    if(is_single()) {
        wp_enqueue_style('stylesheet2', get_template_directory_uri() . '/css/stylesheet2.css', false, '1.0', 'all');
    }

}

add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('post-thumbnails');

function wpdocs_custom_excerpt_length() {
    return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length');

// function wpdocs_excerpt_more() {
//     return '<a href=' . get_the_permalink() . '>Read More</a>';
// }
// add_filter('excerpt_more', 'wpdocs_excerpt_more');

function custom_post_types() {
    $labels = array(
        'name' => 'Cards',
        'add_new_item' => 'Add New Card',
        'edit_item' => 'Edit Card'
    );

    register_post_type('card', array(
        'public' => true,
        'labels' => $labels,
        'supports' => array('title')
    ));
}

add_action('init', 'custom_post_types');

function load_navigation() {
    register_nav_menus(array(
        'sticky_bar' => 'Sticky Bar',
        'footer_bar' => 'Footer Bar'
    ));
}

add_action('after_setup_theme', 'load_navigation');

function add_widgets() {
    register_sidebar(array(
        'name' => 'My Widget',
        'id' => 'widId',
        'before_widget' => '<div class="widget"><div class="widget-wrapper">',
        'after_widget' => '</div></div>',
        'before_title' => '<p>',
        'after_title' => '</p>'
    ));
}

add_action('widgets_init', 'add_widgets');

?>