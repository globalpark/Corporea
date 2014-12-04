<?php

//incluir jQuery
function wpbootstrap_scripts_with_jquery()
{
	wp_register_script( 'jQuery', get_template_directory_uri() . '/js/vendor/jquery-1.11.1.min.js', array( 'jquery' ) );

	// Register the script like this for a theme:
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', array( 'jquery' ) );

	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'jQuery' );
	wp_enqueue_script( 'modernizr' );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

//incluir scripts
function wpcorporea_scripts()
{

	wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.1.min.js', array() );
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array() );
	wp_register_script( 'backstretch', get_template_directory_uri() . '/js/vendor/jquery.backstretch.js', array() );
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array() );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'backstretch' );
	wp_enqueue_script( 'main' );
	
}

add_action( 'wp_footer', 'wpcorporea_scripts');


// Menús //

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );

?>