<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array());
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array());
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/swiper-bundle.min.css', array());
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/scripts/script.js',array(),'1',true);
    wp_enqueue_script('skrollr', get_stylesheet_directory_uri() . '/scripts/skrollr.min.js',array(),'1',true);
    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/scripts/swiper-bundle.min.js',array(),'1',true);
    wp_enqueue_script('slider', get_stylesheet_directory_uri() . '/scripts/slider.js',array(),'1',true);
    wp_enqueue_script('navigation', get_stylesheet_directory_uri() . '/scripts/navigation.js',array(),'1',true);
    wp_enqueue_script('voyageNuage', get_stylesheet_directory_uri() . '/scripts/parallaxe-logo-nuages.js',array(),'1',true);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
// $repertoire=get_stylesheet_directory_uri();
// $repertoire2=get_template_directory_uri();
// error_log("repertoire que j utilise:zzz".$repertoire);

