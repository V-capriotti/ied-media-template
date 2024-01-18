<?php
/**
 * Functions.
 */


function tema_ied_enqueue_script_and_styles(){


/* Includo il foglio di stile principale */
wp_enqueue_style( 'style' , get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all' );
wp_enqueue_script('index', get_template_directory_uri() .'/assets/js/index.js', array(),  wp_get_theme()->get('Version'),true);}

add_action( 'wp_enqueue_scripts', 'tema_ied_enqueue_script_and_styles');

function tema_ied_after_setup_theme() {
    //Aggiungo supporto per menu dinamici
    add_theme_support('menus');

    //Aggiungo supporto per il titolo
    add_theme_support('title-tag');

    //Registro menu di navigazione dinamici
    if ( function_exists( 'wp-nav-menu' )) {
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu',
        )
        );
    
    }
}


 add_action('after_setup_theme', 'tema_ied_after_setup_theme');

?>