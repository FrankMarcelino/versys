<?php
// Adiciona os hooks para carregar CSS e JavaScript
function tema_personalizado_scripts() {
    // Registrar e carregar arquivos CSS existentes
    wp_enqueue_style('estilo-principal', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

    // Registrar e carregar novos arquivos CSS (header)
    wp_enqueue_style('style-header', get_template_directory_uri() . '/assets_menu/style-header.css', array(), '1.0', 'all');
    wp_enqueue_style('hover-styles', get_template_directory_uri() . '/assets_menu/css/styles/hover.css', array(), '1.0', 'all');
    wp_enqueue_style('responsive-styles', get_template_directory_uri() . '/assets_menu/css/styles/responsive.css', array(), '1.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets_menu/vendors/animate.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-animate', get_template_directory_uri() . '/assets_menu/vendors/custom-animate.css', array(), '1.0', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets_menu/vendors/flaticon.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets_menu/vendors/fontawesome-all.css', array(), '1.0', 'all');
    wp_enqueue_style('linoor-icons', get_template_directory_uri() . '/assets_menu/vendors/linoor-icons.css', array(), '1.0', 'all');
    wp_enqueue_style('reey-font', get_template_directory_uri() . '/assets_menu/vendors/reey-font.css', array(), '1.0', 'all');
    
    // Registrar e carregar JS para o menu
    wp_enqueue_script('funtions-menu', get_template_directory_uri() . '/assets_menu/js/functions.js', array(), null, true);

    // Registrar e carregar os arquivos JavaScript na pasta assets
    $assets_dir = get_template_directory_uri() . '/assets/';
    wp_enqueue_script('jquery-custom', $assets_dir . 'js/jquery.js', array(), null, true);
    wp_enqueue_script('jRespond', $assets_dir . 'js/jRespond.min.js', array(), null, true);
    wp_enqueue_script('jquery-easing', $assets_dir . 'js/jquery.easing.min.js', array(), null, true);
    wp_enqueue_script('jquery-fitvids', $assets_dir . 'js/jquery.fitvids.js', array(), null, true);
    wp_enqueue_script('wow', $assets_dir . 'js/wow.min.js', array(), null, true);
    wp_enqueue_script('jquery-stellar', $assets_dir . 'js/jquery.stellar.js', array(), null, true);
    wp_enqueue_script('owl-carousel', $assets_dir . 'js/owl.carousel.min.js', array(), null, true);
    // wp_enqueue_script('jquery-mb-YTPlayer', $assets_dir . 'js/jquery.mb.YTPlayer.min.js', array(), null, true);
    wp_enqueue_script('hoverIntent', $assets_dir . 'js/hoverIntent.js', array(), null, true);
    wp_enqueue_script('simple-scrollbar', $assets_dir . 'js/simple-scrollbar.min.js', array(), null, true);
    wp_enqueue_script('superfish', $assets_dir . 'js/superfish.js', array(), null, true);
    wp_enqueue_script('scrollIt', $assets_dir . 'js/scrollIt.min.js', array(), null, true);
    wp_enqueue_script('isotope', $assets_dir . 'js/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('magnific-popup', $assets_dir . 'js/jquery.magnific-popup.min.js', array(), null, true);
    wp_enqueue_script('wait-for-images', $assets_dir . 'js/jquery.waitforimages.min.js', array(), null, true);
    wp_enqueue_script('jquery-validate', $assets_dir . 'js/jquery.validate.min.js', array(), null, true);
    wp_enqueue_script('google-map', $assets_dir . 'js/google-map.js', array(), null, true);

    // Enfileirando o script do Google Maps diretamente
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1vAzZpKh9vsQvF3e4MeClkyYB-MWtnA&callback=initMap', array(), null, true);

    wp_enqueue_script('functions', $assets_dir . 'js/functions.js', array(), null, true);
}

// Adiciona o hook para a ação wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'tema_personalizado_scripts');

function registrar_menus() {
    register_nav_menus(array(
        'primary_menu' => __('Menu Principal', 'tema'),
    ));
}
add_action('after_setup_theme', 'registrar_menus');