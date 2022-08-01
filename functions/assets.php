<?php
// Load mso styles & scripts
add_action('wp_enqueue_scripts', function () {
    // Main style
    wp_enqueue_style('mso-main-style', get_template_directory_uri() . '/build/css/main.css', '', filemtime(get_theme_file_path() . '/build/css/main.css'), 'all');
    // Vendors styles
    wp_enqueue_style('mso-vendors-styles', get_template_directory_uri() . '/build/css/vendors.css', '', filemtime(get_theme_file_path() . '/build/css/vendors.css'), 'all');
    // External fonts
    wp_enqueue_style('mso-google-fonts-style', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('mso-typekit-style', 'https://use.typekit.net/ldw7tbk.css');

    // Main scripts
    
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');

    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');

    wp_enqueue_script('mso-main-scripts', get_template_directory_uri() . '/build/js/main.js', [ 'jquery' ], filemtime(get_theme_file_path() . '/build/js/main.js'), true);
    // Vendors scripts
    wp_enqueue_script('mso-vendors-scripts', get_template_directory_uri() . '/build/js/vendors.js', [ 'jquery' ], filemtime(get_theme_file_path() . '/build/js/vendors.js'), true);

    // Make AJAX available in Theme JS
    wp_localize_script( 'custom', 'ajaxadminurl', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));
}, 999);
?>