<?php


add_action('wp_enqueue_scripts', 'globalgaap_enqueue_styles');

function globalgaap_enqueue_styles()
{
    wp_enqueue_style(
        'coming-soon',
        get_parent_theme_file_uri('assets/css/coming-soon.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
    wp_enqueue_style(
        'banner-hero',
        get_parent_theme_file_uri('assets/css/banner-hero.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
    wp_enqueue_style(
        'dynamic-header',
        get_parent_theme_file_uri('assets/css/dynamic-header.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}

function globalgaap_enqueue_scripts()
{
    wp_enqueue_script('countdown-timer', get_template_directory_uri() . '/assets/js/coming-soon-timer.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'globalgaap_enqueue_scripts');
