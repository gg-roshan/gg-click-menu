<?php

/*
 * Plugin Name:       GG Click Menu
 * Plugin URI:        https://gilligangroup.com.au/
 * Description:       A basic plugin to change elementor smartmenus hover state to click event.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Roshan Adhikari
 * Author URI:        https://roshanadhikari.com.au/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gg-click-menu
 */


 /***
 * This Code Snippet is used to remove default elementor menu hover behvariour
 * And change it to onClick event to display sub-menu
 * */

function elementor_pro_dequeue_script(){
	wp_dequeue_script('smartmenus');
}
add_action('wp_footer', 'elementor_pro_dequeue_script', 15);

function custom_smartmenu_js(){
    wp_register_script('override-menu', plugins_url('/js/custom-nav.min.js',__FILE__ ), array('jquery'), '', true);
	wp_enqueue_script('override-menu');
}


add_action('wp_enqueue_scripts', 'custom_smartmenu_js');