<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Déclarer jQuery
    wp_enqueue_script('jquery');

    // Déclarer le JS
    wp_enqueue_script(
        'koukaki',
        get_template_directory_uri() . 'assets/js/script.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css');
}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
