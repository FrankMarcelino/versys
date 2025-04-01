<?php
// Adiciona os hooks para carregar CSS e JavaScript
function tema_personalizado_scripts() {
    // Registrar e carregar arquivos CSS existentes
    wp_enqueue_style('estilo-principal', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

    // Registrar e carregar novos arquivos CSS
    wp_enqueue_style('style-header', get_template_directory_uri() . '/assets_menu/style-header.css', array(), '1.0', 'all');
    wp_enqueue_style('hover-styles', get_template_directory_uri() . '/assets_menu/css/styles/hover.css', array(), '1.0', 'all');
    wp_enqueue_style('responsive-styles', get_template_directory_uri() . '/assets_menu/css/styles/responsive.css', array(), '1.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets_menu/vendors/animate.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-animate', get_template_directory_uri() . '/assets_menu/vendors/custom-animate.css', array(), '1.0', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets_menu/vendors/flaticon.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets_menu/vendors/fontawesome-all.css', array(), '1.0', 'all');
    wp_enqueue_style('linoor-icons', get_template_directory_uri() . '/assets_menu/vendors/linoor-icons.css', array(), '1.0', 'all');
    wp_enqueue_style('reey-font', get_template_directory_uri() . '/assets_menu/vendors/reey-font.css', array(), '1.0', 'all');

    // Registrar e carregar arquivos JavaScript existentes
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', true);
    wp_enqueue_script('jquery-unveil', get_template_directory_uri() . '/assets/js/jquery.unveil.js', array('jquery'), '1.0', true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '1.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array(), '1.0', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.min.js', array(), '1.0', true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/carousel.js', array(), '1.0', true);
    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', array(), '1.0', true);
    wp_enqueue_script('elements', get_template_directory_uri() . '/assets/js/elements.js', array(), '1.0', true);
    wp_enqueue_script('masonry', get_template_directory_uri() . '/assets/js/masonry.js', array(), '1.0', true);
    wp_enqueue_script('form', get_template_directory_uri() . '/assets/js/form.js', array(), '1.0', true);
    wp_enqueue_script('user-scroll', get_template_directory_uri() . '/assets/js/useScroll.js', array(), '1.0', true);
}

// Adiciona o hook para a ação wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'tema_personalizado_scripts');

function registrar_menus() {
    register_nav_menus(array(
        'primary_menu' => __('Menu Principal', 'tema'),
    ));
}
add_action('after_setup_theme', 'registrar_menus');