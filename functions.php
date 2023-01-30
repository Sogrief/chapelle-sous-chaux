<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

function chapelle_setup(){
	add_theme_support( 'custom-logo' );
}
  
  add_action( 'after_setup_theme', 'chapelle_setup' );

function chapelle_register_assets() {

	wp_enqueue_style( 
	  'chapelle', 
	  get_template_directory_uri() . '/dist/css/main.css',
	  array(), 
	  '1.0'
	);
  
	wp_enqueue_script( 
	  'chapelle', 
	  get_template_directory_uri() . '/dist/js/script.js', 
	  array(), 
	  '1.0', 
	  true
	);
  }
  
  
  add_action( 'wp_enqueue_scripts', 'chapelle_register_assets' );