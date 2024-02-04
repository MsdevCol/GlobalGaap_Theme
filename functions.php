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
}
