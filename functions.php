<?php

    function load_assets(){

        //Cargar bootstrap_css
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

        //Cargar bootstrap_js
        wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

        //carga el css del tema
        wp_enqueue_style('style', get_stylesheet_uri());

    }

    add_action('wp_enqueue_scripts', 'load_assets');

    //soporte para imagenes destacadas en pagina
    add_theme_support('post-thumbnails');

?>