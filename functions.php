<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * THEME SUPPORT
 */
add_theme_support('title-tag');
add_theme_support('post-thumbnail');

/**
 * SCRIPTS AND STYLES
 */
add_action('wp_enqueue_scripts', 'hff_enqueues');

function hff_enqueues(){
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/dist/core.min.css');
}
/**
 * REGISTER MENUS
 *
*/
add_action('init', 'hff_add_menus');

function hff_add_menus() {
    register_nav_menus(array(
        'nav_primary' => 'Primary'
    ));
}