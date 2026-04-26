<?php
/**
 * DACLI THEME - Functions
 */

function dacli_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => 'Menú Principal Dacli',
    ));
}
add_action('after_setup_theme', 'dacli_setup');

function dacli_scripts() {
    // Carga el style.css de la raíz
    wp_enqueue_style('dacli-style', get_stylesheet_uri());
    
    // Carga el custom.css desde assets/css/
    wp_enqueue_style('dacli-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.6');
    
    // Carga las animaciones AOS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    
    // Carga tu main.js
    wp_enqueue_script('dacli-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'aos-js'), '1.6', true);
}
add_action('wp_enqueue_scripts', 'dacli_scripts');