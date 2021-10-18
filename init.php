<?php

/*
 * Plugin Name:       Scrll-ToTop
 * Plugin URI:        http://plugins.jakirriaaz.com/
 * Description:       Scroll to top button plugin and very easy to use this item
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jakir Riaaz
 * Author URI:        http://jakirriaaz.com/
 * License:           GPL v2 or later
 * Text Domain:       scroll-to-top-plugin
 * Domain Path:       /languages
 */



add_action('wp_enqueue_scripts', 'link_style_files');

function link_style_files(){
    wp_enqueue_style('fonts-awesome', PLUGINS_URL('css/font-awesome.min.css', __FILE__) );
    
    wp_enqueue_style('custom-style', PLUGINS_URL('css/custom.css', __FILE__) );

    wp_enqueue_script('jr-custom-js', PLUGINS_URL('js/custom.js', __FILE__), array('jquery'), '1.0.0', true);
}


add_action('wp_footer', 'scroll_to_top');

function scroll_to_top(){
    ?>
        <div class="scroll-to-top">
            <a href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
        </div>

    <?php
}