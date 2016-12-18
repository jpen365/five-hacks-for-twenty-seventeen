<?php

// Enqueue parent theme styles and child theme stylesheet
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}

// Enqueue child them js file
add_action( 'wp_enqueue_scripts', 'child_theme_js' );
function child_theme_js() {
  wp_enqueue_script( 'child-theme-js' , get_stylesheet_directory_uri() . '/child-theme-js.js' , array( 'twentyseventeen-global' ) , false , true );
}

