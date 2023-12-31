<?php
/*
Plugin Name: Wordpress Text Analyzer Generator
Plugin URI: https://github.com/ginirator/wordpress-plugin-text-analyzer
Description: A simple plugin that analyzes text.
Version: 1.0
Author: Valeriu Dodon
Author URI: https://ginirator.com/online-tools/word-analyzer-generator/
License: GPL2
*/

// Register and enqueue your JavaScript and CSS files
function text_analyzer_enqueue_scripts() {
    // JavaScript file
    wp_register_script('text-analyzer-js', plugin_dir_url(__FILE__) . '/assets/js/scripts.js', array('jquery'), '1.0', true);
    wp_enqueue_script('text-analyzer-js');

    // CSS file
    wp_register_style('text-analyzer-css', plugin_dir_url(__FILE__) . '/assets/css/styles.css', '', '1.0');
    wp_enqueue_style('text-analyzer-css');
}
add_action('wp_enqueue_scripts', 'text_analyzer_enqueue_scripts');

// Include your HTML form
function text_analyzer_display_form() {
    include 'form.html';
}
add_shortcode('text-analyzer', 'text_analyzer_display_form');
