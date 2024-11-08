<?php
function theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue additional styles or scripts (e.g., Bootstrap, custom JS)
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
    
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function my_theme_scripts() {
    // jQuery (WordPress includes it by default, but if needed, you can enqueue a custom version)
    wp_enqueue_script('jquery');  // Default jQuery provided by WordPress

    // Bootstrap JS (Make sure to add the correct version or URL)
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array('jquery'), '4.4.1', true);

    // Other external libraries
    wp_enqueue_script('easing-js', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/lib/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('typed-js', get_template_directory_uri() . '/lib/typed/typed.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints-js', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array('jquery'), null, true);

    // Custom JavaScript (if needed)
    wp_enqueue_script('my-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery', 'bootstrap-js'), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');


?>

