<?php

/**
 * Plugin Name: Portfolio maker addon
 * Description: Portfolio maker addon widgets for Elementor.
 * Version:     1.0.0
 * Author:      Mahmud Haisan
 * Author URI:  https://github.com/mahmudhaisan
 */

function register_hello_world_widget($widgets_manager)
{

    require_once(__DIR__ . '/widgets/portfolio-widgets.php');


    $widgets_manager->register(new \Portfolio_Header_Widgets());
}
add_action('elementor/widgets/register', 'register_hello_world_widget');
