<?php

function load_stylesheets() {
    // Enqueue your theme's main stylesheet
    wp_enqueue_style('styles', get_stylesheet_uri(), array(), '1.0', 'all');
    
    // Enqueue external stylesheets
    wp_enqueue_style('boxi', 'https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css', array(), '1.0', 'all');
    wp_enqueue_style('scroll', 'https://unpkg.com/aos@next/dist/aos.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function enqueue_custom_script() {
    // Deregister the default WordPress jQuery and enqueue your version
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    
    // Enqueue other scripts
    wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0', true);
    wp_enqueue_script('migrate', get_template_directory_uri() . '/path/to/jquery-migrate-1.2.1.min.js', array('jquery'), '1.2.1', true);
    wp_enqueue_script('slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_script');

?>

<?php

function university_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}

add_action('after_setup_theme', 'university_features');

?>





    <script>
      AOS.init();
    </script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>






   


