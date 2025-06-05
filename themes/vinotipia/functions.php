<?php
function vinotipia_enqueue_styles() {
    // Encola el style.css del tema actual
    wp_enqueue_style(
        'vinotipia-style', // Handle del estilo
        get_stylesheet_uri(), // Obtiene la URL del style.css del tema
        array(), // Dependencias
        wp_get_theme()->get('Version') // Versión del tema para evitar caché
    );
}
add_action( 'wp_enqueue_scripts', 'vinotipia_enqueue_styles' );


function cargar_font_awesome() {
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'cargar_font_awesome');

function add_aos_animation_scripts() {
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);

    // Inicia AOS
  wp_add_inline_script('aos-js', 'AOS.init({ once: true });');

}
add_action('wp_enqueue_scripts', 'add_aos_animation_scripts');