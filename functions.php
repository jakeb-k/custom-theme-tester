<?php 

function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function register_custom_menu() {
    register_nav_menu('navMenu', __('Nav Menu', 'your-theme-textdomain'));
}
add_action('init', 'register_custom_menu');
?> 