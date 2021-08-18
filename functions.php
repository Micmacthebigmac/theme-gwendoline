<?php
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'style.css',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );