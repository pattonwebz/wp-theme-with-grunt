<?php
function pwwp_enqueue_my_scripts() {
    // jQuery is stated as a dependancy - it will be loaded by WordPress before the theme scripts
    wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), true); // all the bootstrap javascript goodness
}
add_action('wp_enqueue_scripts', 'pwwp_enqueue_my_scripts');

function pwwp_enqueue_my_styles() {
    wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/css/style.css' );
}
add_action('wp_enqueue_scripts', 'pwwp_enqueue_my_styles');
