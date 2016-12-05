<?php

function my_scripts_enqueue() {
    wp_register_script( 'jquery-js', get_template_directory_uri() . '/materialize/js/jquery-3.1.1.min.js', array('jquery'), NULL, true );
    wp_register_script( 'materialize-js', get_template_directory_uri() . '/materialize/js/materialize.min.js', array('jquery'), NULL, true );
    wp_register_style( 'materialize-css', get_template_directory_uri() . '/materialize/css/materialize.min.css', false, NULL, 'all' );
    wp_register_style( 'main-css', get_template_directory_uri() . '/style.css', false, NULL, 'all' );
    wp_register_script( 'main-js', get_template_directory_uri() . '/main.js', false, NULL, 'all' );
    wp_enqueue_script( 'jquery-js' );
    wp_enqueue_script( 'materialize-js' );
    wp_enqueue_style( 'materialize-css' );
    wp_enqueue_style( 'main-css' );
    wp_enqueue_script( 'main-js' );

}
add_action( 'wp_enqueue_scripts', 'my_scripts_enqueue' );

