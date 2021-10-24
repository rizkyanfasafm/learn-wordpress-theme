<?php

function followrizky_theme_support(){
    // Add dyanmic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'followrizky_theme_support');

function followrizky_menus(){
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init', 'followrizky_menus');

function followrizky_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('followrizky-style', get_template_directory_uri(). '/style.css', array('followrizky-bootstrap'), $version, 'all');
    wp_enqueue_style('followrizky-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('followrizky-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'followrizky_register_styles');

function followrizky_register_scripts(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('followrizky-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('followrizky-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('followrizky-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('followrizky-main', get_template_directory_uri(). '/assets/js/main.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'followrizky_register_scripts');

?>