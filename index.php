<?php
/*
Plugin Name: JJ Custom Simple Screen Size Responsive Navigation
Description: Adds a simple, screen-size responsive navigation menu
Version: 1.0
Author: Joanna
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Jjsrn {
    function __construct() {
        add_action('init', array($this, 'adminAssets')); 
    }
  
    function adminAssets() {
        wp_enqueue_script('simpleNav', plugin_dir_url(__FILE__) . 'build/index.js');
        wp_enqueue_style('jjcustonphonenavcss', plugin_dir_url(__FILE__) . 'build/index.css');
        register_block_type('jjcmc/screen-size-responsive-menu', array(
            'editor_script' => 'simpleNav',
            'render_callback' => array($this, 'blockHTML')
        ));
    }

    function blockHTML($attributes) {
        ob_start(); ?>
        <div>
            <input type="checkbox" id="side-menu"/>
            <label id="menu-label" for="side-menu">...</label>
            <nav id="responsive-nav">
                <p>menu</p>
            </nav>
        </div>
        <?php return ob_get_clean();
    }
}
  
$jjsrn = new Jjsrn();