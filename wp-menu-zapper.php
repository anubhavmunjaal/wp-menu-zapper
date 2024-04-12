<?php
/*
Plugin Name: WP Menu Zapper
Plugin URI: https://www.anubhavmunjaal.com/wp-menu-zapper
Description: A Plugin made specifically to remove menus from WordPress Menu manager in bulk manner.
Version: 1.0
Author: Anubhav Munjaal
Author URI: https://www.anubhavmunjaal.com
License: GPL2
*/


function wp_menu_zapper_enqueue_scripts($hook) {
    if ('nav-menus.php' != $hook) {
        return;
    }
    wp_enqueue_script('wp-menu-zapper', plugin_dir_url(__FILE__) . 'menu-zapper.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'wp_menu_zapper_enqueue_scripts');


function wp_menu_zapper_enqueue_styles($hook) {
    if ('nav-menus.php' != $hook) {
        return;
    }
    wp_enqueue_style('wp-menu-zapper', plugin_dir_url(__FILE__) . 'menu-zapper.css', array(), '1.0');
}
add_action('admin_enqueue_scripts', 'wp_menu_zapper_enqueue_styles');
