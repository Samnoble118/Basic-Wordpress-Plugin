<?php
//exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

//Shortcode function
function sam_custom_shortcode(){
    return '<h1>Sam\'s Plugin</h1>';
}

//Register the shortcode
function sam_register_shortcode(){
    add_shortcode('sam-plugin', 'sam_custom_shortcode');
}
add_action('init', 'sam_register_shortcode');
?>