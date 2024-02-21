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
        'header',
        get_parent_theme_file_uri('assets/css/header.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
    wp_enqueue_style(
        'who-are-we',
        get_parent_theme_file_uri('assets/css/who-are-we.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
    wp_enqueue_style(
        'team-card',
        get_parent_theme_file_uri('assets/css/team-card.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
    wp_enqueue_style(
        'front-page',
        get_parent_theme_file_uri('assets/css/front-page.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
    wp_enqueue_style(
        'footer',
        get_parent_theme_file_uri('assets/css/footer.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
    wp_enqueue_style(
        'contact-form',
        get_parent_theme_file_uri('assets/css/contact-form.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
    wp_enqueue_style(
        'carrousel-hero',
        get_parent_theme_file_uri('assets/css/carrousel-hero.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}


function globalgaap_enqueue_scripts()
{
    wp_enqueue_script('countdown-timer', get_template_directory_uri() . '/assets/js/coming-soon-timer.js', array(), '1.0.0', true);
    wp_enqueue_script('dynamic-header', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0.0', true);
    wp_enqueue_script('carrousel-hero', get_template_directory_uri() . '/assets/js/carrousel-hero.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'globalgaap_enqueue_scripts');
