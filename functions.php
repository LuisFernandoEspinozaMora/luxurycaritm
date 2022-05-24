<?php

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function load_assets(){

        //Cargar bootstrap_css
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

        //Cargar bootstrap_js
        wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

        //font-awesome
        wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');

        //google-fonts
        wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap');

        //carga el css del tema
        wp_enqueue_style('style', get_stylesheet_uri());

    }

    add_action('wp_enqueue_scripts', 'load_assets');

    //soporte para imagenes destacadas en pagina
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
    
    add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
    
    function wpdocs_theme_name_scripts() {
        if(is_page_template('customreserva.php')){
            wp_enqueue_script( 'script-reserva', get_template_directory_uri() . '/js/reserva.js', array(), '1.0.0', true );
        }
        
    }
    add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

?>