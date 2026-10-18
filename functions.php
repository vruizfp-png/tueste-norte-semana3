<?php
/**
 * Configuración del tema Tueste Norte.
 */

// 1. Soportes y menús del tema.
function tuestenorte_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'principal' => 'Menú principal',
    ));
}
add_action('after_setup_theme', 'tuestenorte_setup');

// 2. Estilos y scripts del tema.
function tuestenorte_assets() {
    wp_enqueue_style(
        'tuestenorte-estilos',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'tuestenorte_assets');

