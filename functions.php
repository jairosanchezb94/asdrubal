<?php
function tema_scripts() {
    wp_enqueue_style('tema-style', get_stylesheet_uri());
    wp_enqueue_script('tema-script', get_template_directory_uri() . '/assets/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'tema_scripts');
?>