<?php

/* Embedding scripts and styles the Wordpress way */
function embed_script_and_styles() {
    wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'embed_script_and_styles' );