<?php
add_action( 'wp_enqueue_scripts', 'my_plugin_assets' );
function my_plugin_assets() {
    wp_register_style( 'theme-styles', get_template_directory_uri() . '/css/my-theme.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'theme-styles' );
}