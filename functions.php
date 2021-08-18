<?php

function alphaweb_register_assets() {
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'ThemeGwendolineMatos-wordpress-style',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	

}
add_action( 'wp_enqueue_scripts', 'Theme Gwendoline Matos_register_assets' );