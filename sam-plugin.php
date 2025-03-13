<?php
/**
 * Plugin Name: Sam's Plugin
 * Plugin URI:  https://github.com/Samnoble118
 * Description: A custom WordPress plugin that adds a shortcode, widget, and admin dashboard.
 * Version: 1.0.0
 * Author: Sam Noble
 * Author URI: https://github.com/Samnoble118
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: sam-plugin
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('SAM_PLUGIN_URL', plugin_dir_url(__FILE__));
define('SAM_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Include other plugin files
require_once SAM_PLUGIN_PATH . 'shortcode.php';
require_once SAM_PLUGIN_PATH . 'widget.php';
require_once SAM_PLUGIN_PATH . 'admin-dashboard.php';

// Register activation and deactivation hooks
function sams_plugin_activation() {
    // Activation code here
}
register_activation_hook(__FILE__, 'sams_plugin_activation');

function sams_plugin_deactivation() {
    // Deactivation code here
}
register_deactivation_hook(__FILE__, 'sams_plugin_deactivation');
