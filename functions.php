<?php
add_action('wp_enqueue_scripts', 'astra_child_garage_theme_enqueue_styles');

function astra_child_garage_theme_enqueue_styles() {
    // Enqueue the parent theme's stylesheet
    $parent_style_url = get_template_directory_uri() . '/style.css';
    wp_enqueue_style('astra-parent-style', $parent_style_url);

    // Enqueue the child theme's stylesheet
    $child_style_url = get_stylesheet_directory_uri() . '/style.css';
    wp_enqueue_style('astra-child-style', $child_style_url, array('astra-parent-style'));

    // Enqueue the Tailwind CSS
    $tailwind_style_url = get_stylesheet_directory_uri() . '/tailwind-output.css';
    wp_enqueue_style('tailwind-style', $tailwind_style_url, array('astra-child-style'));
}
