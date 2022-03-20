<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * THEME SUPPORT
 */
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

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
        'nav_primary' => 'Primær menu'
    ));
}
/**
 * REGISTER WIDGET AREAS
 */
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Sidefod',
    'id' => 'hff_footer_info',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

/**
 * FADES IMAGES IND ON LOAD TO PREVENT CURTAIN LOAD
 */
add_action('wp_head', 'images_fade_in_on_load');

function images_fade_in_on_load(){
  echo '
  <script>
        /**
         * Fades images in on load to prevent curtain load
         *
         * @param   target    References the element / img tag self
         *
         * @return  void
         */
        function loadImageonLoad ( target ) {
            target.style.animationPlayState = "running";
            console.log(target);
        }
    </script>
  ';
}