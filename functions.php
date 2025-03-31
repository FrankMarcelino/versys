<?php
function carregar_scripts_tema() {
    // Registrar e enfileirar scripts locais
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), null, true);
    wp_enqueue_script('jRespond', get_template_directory_uri() . '/js/jRespond.min.js', array(), null, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), null, true);
    wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array(), null, true);
    wp_enqueue_script('stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array(), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('mb-ytplayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js', array(), null, true);
    wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js', array(), null, true);
    wp_enqueue_script('simple-scrollbar', get_template_directory_uri() . '/js/simple-scrollbar.min.js', array(), null, true);
    wp_enqueue_script('superfish', get_template_directory_uri() . '/js/superfish.js', array(), null, true);
    wp_enqueue_script('scrollIt', get_template_directory_uri() . '/js/scrollIt.min.js', array(), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), null, true);
    wp_enqueue_script('waitforimages', get_template_directory_uri() . '/js/jquery.waitforimages.min.js', array(), null, true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), null, true);
    wp_enqueue_script('google-map', get_template_directory_uri() . '/js/google-map.js', array(), null, true);

    // Script do Google Maps (carregado com async e defer)
    wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1vAzZpKh9vsQvF3e4MeClkyYB-MWtnA&callback=initMap', array(), null, true);

    // Funções gerais
    wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', array(), null, true);
}

// Adicione o gancho para carregar os scripts
add_action('wp_enqueue_scripts', 'carregar_scripts_tema');


function carregar_estilos_tema() {
    // Registrar e enfileirar estilos locais
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), null, 'all');
    wp_enqueue_style('style-header', get_template_directory_uri() . '/css/style-header.css', array(), null, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
  
}

// Adicione o gancho para carregar os estilos
add_action('wp_enqueue_scripts', 'carregar_estilos_tema');
?> 