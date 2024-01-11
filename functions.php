<?php
/**
 * Functions.
 */


function tema_ied_enqueue_script_and_styles(){


/* Includo il foglio di stile principale */
 wp_enqueue_style( 'style' , get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all' );
 wp_enqueue_script('index', get_template_directory_uri() .'/assets/js/index.js', array(),  wp_get_theme()->get('Version'),true);}

 add action( 'wp_enqueue_scripts', 'tema_ied_enqueue_script_and_styles');

?>