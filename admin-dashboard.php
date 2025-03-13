<?php
//exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

//Add menu item to the admin dashboard
function sam_admin_menu() {
    add_menu_page(
        'Sam Plugin Settings',   // Page title
        'Sam Plugin',            // Menu title
        'manage_options',        // Capability (admin only)
        'sam-plugin-settings',   // Menu slug
        'sam_admin_page',        // Function to display the page
        'dashicons-admin-generic', // Icon (WordPress dashicon)
        25                       // Position in the menu
    );
}
add_action('admin_menu', 'sam_admin_menu');

//Function to display the admin page
function sam_admin_page() {
    ?>
    <div class="wrap">
        <h2>Sam Plugin Settings</h2>
        <p>Welcome to the Sam Plugin settings page!</p>
    </div>
    <?php
}
?>