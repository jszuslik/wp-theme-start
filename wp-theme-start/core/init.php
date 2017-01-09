<?php
if ( function_exists('nrw_require_file') ) {

    // Load Classes
    nrw_require_file( NRW_CORE_CLASSES . 'class-tgm-plugin-activation.php' );
    nrw_require_file( NRW_CORE_CLASSES . 'wp_bootstrap_navwalker.php' );
    nrw_require_file( NRW_CORE_CLASSES . 'like-post/nrw-like-post.php' );

    // Load Functions
    nrw_require_file( NRW_CORE_FUNCTIONS . 'customizer/nrw_custom_control.php' );
    nrw_require_file( NRW_CORE_FUNCTIONS . 'customizer/nrw_customizer_settings.php' );
    nrw_require_file( NRW_CORE_FUNCTIONS . 'customizer/nrw_customizer_style.php' );
    nrw_require_file( NRW_CORE_FUNCTIONS . 'nrw_resize_image.php' );

    // Load Widgets
    nrw_require_file( NRW_CORE_WIDGETS . 'nrw_about_widget.php' );
    nrw_require_file( NRW_CORE_WIDGETS . 'nrw_latest_posts_widget.php' );
    nrw_require_file( NRW_CORE_WIDGETS . 'nrw_categories_images.php' );

}