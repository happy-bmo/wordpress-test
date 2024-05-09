<?php
/**
 * Enqueue Styles
 *
 * @package Basic_Business
 * @version GIT: 1.0.2
 *
 * @phpcs:disable
 * (c) 2024 Basic Business. All rights reserved.
 */

if (!function_exists('Basic_Business_setup')) {
    /**
     * Theme setup
     *
     * @return void
     */
    function Basic_Business_setup()
    {
        // Add theme support
        add_theme_support('custom-logo');
        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_theme_support('post-thumbnails');

        // Load text domain for translation
        load_theme_textdomain('basic-business', get_template_directory() . '/languages');
    }
}
add_action('after_setup_theme', 'Basic_Business_setup');

if (!function_exists('Basic_Business_Enqueue_style')) {
    /**
     * Enqueue style.
     *
     * @return void
     */
    function Basic_Business_Enqueue_style()
    {
        // Enqueue main stylesheet
        wp_enqueue_style('basic-business-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
    }
}
add_action('wp_enqueue_scripts', 'Basic_Business_Enqueue_style');
