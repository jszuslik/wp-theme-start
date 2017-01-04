<?php
define('NRW_LIBS_URI', get_template_directory_uri() . '/libs/');
define('NRW_CORE_PATH', get_template_directory() . '/core/');
define('NRW_CORE_URI', get_template_directory_uri() . '/core/');
define('NRW_CORE_CLASSES', NRW_CORE_PATH . 'classes');
define('NRW_CORE_FUNCTIONS', NRW_CORE_PATH . 'functions');
define('NRW_CORE_WIDGETS', NRW_CORE_PATH . 'widgets');
define('NRW_TEXT_DOMAIN', 'nrw');

// Set content width
if (!isset( $content_width ) ) { $content_width = 1170; }

// Theme setup
add_action('after_setup_theme', 'nrw_setup');
function nrw_setup() {
    load_theme_textdomain( NRW_TEXT_DOMAIN, get_template_directory() . '/languages' );
    add_theme_support('woocommerce');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size(NRW_TEXT_DOMAIN . '-fullwidth', 1170, 0, true);
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', NRW_TEXT_DOMAIN),
            'topbar'  => esc_html__('Topbar Menu', NRW_TEXT_DOMAIN)
        )
    );
    add_theme_support('post-formats', array('video', 'audio', 'gallery'));
}