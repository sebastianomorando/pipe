<?php

/* Embedding scripts and styles the Wordpress way */
function embed_script_and_styles() {
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style( 'pipe', get_stylesheet_uri(), array( 'bootstrap' ));
    wp_enqueue_style( 'pipe' );
}
add_action( 'wp_enqueue_scripts', 'embed_script_and_styles' );