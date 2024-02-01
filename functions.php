<?php

/**
 * Functions.
 */


 function tema_ied_enqueue_scripts_and_styles() {
    // Inlcudo foglio di stile principale
    wp_enqueue_style( 'style', get_stylesheet_uri(),  array(), wp_get_theme()->get('Version'), 'all');

    // Inlcudo foglio di stile principlae
    wp_enqueue_style('font awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');

    wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array(), wp_get_theme()->get('Version'), true );
 }

 function tema_ied_init() {
   register_sidebar( array(
      'name' => 'Right Sidebar',
      'id' => 'right-sidebar',
      'description' => 'Sidebar a destra',
      'before_widget'  => '<div id="%1$s" class="widget %2$s">',
		'after_widget'   => "</div>",
		'before_title'   => '<h3 class="widgettitle">',
		'after_title'    => "</h3>",
   )

   );
 }

 add_action ('init', 'tema_ied_init');

 add_action('wp_enqueue_scripts', 'tema_ied_enqueue_scripts_and_styles');

 function tema_ied_after_setup_theme() {

   //aggiungo supporto per menu dinamici
   add_theme_support( 'menus' );

   // aggiungo supporto per il Title nell'head
   add_theme_support( 'title-tag' );

   // aggiungo supporto per il thumbnail del
   add_theme_support( 'post-thumbnails' );

   //Aggiungo un size dell'immagine personalizzato
   //add_image_size( string $name, int $width, int $height, bool|array $crop = false ) - Questi sono i pararmetri che si prende
   add_image_size ('custom-image', 700, 400, true );

   //registro menu di navigazione dinamici
      register_nav_menus(
         array(
            'main-menu' => 'Main Menu',
            //'footer-menu' => 'Footer Menu',
            //'social-menu' => 'Social Menu',
         )
      );
 }

 add_action('after_setup_theme', 'tema_ied_after_setup_theme');
?>