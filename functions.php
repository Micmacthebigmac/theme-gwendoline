<?php
function register_assets() {

// Lier le style.css
wp_enqueue_style( 
    'wordpress-style',
    get_stylesheet_uri(), 
    array(), 
    '1.0'
);

// Lier le JS
wp_enqueue_script( 
    'custom-script',
    get_template_directory_uri() . '/js/script.js',
    array(), 
    '1.0'
);
}
add_action( 'wp_enqueue_scripts', 'register_assets' );