<?php
    add_action('wp_enqueue_scripts', 'ojjoscripts');
    function ojjoscripts () {
        wp_enqueue_style('ojjo_style', get_template_directory_uri() . '/assets/css/style.min.css');
        wp_enqueue_script( 'ojjo_script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
    }
    add_theme_support('custom-logo');
?>