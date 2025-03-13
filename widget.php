<?php   
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Create a custom widget
class Sam_Custom_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'sam_custom_widget', 
            __('Sam Custom Widget', 'sam_plugin'), 
            array('description' => __('A simple custom widget', 'sam_plugin'))
        );
    }

    // Widget front end display
    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo '<p>Hello, this is Sam\'s custom widget!</p>';
        echo $args['after_widget'];
    }

    // Widget back end form
    public function form($instance) {
        echo '<p>No settings available for this widget.</p>';
    }

    // Update widget settings
    public function update($new_instance, $old_instance) {
        return $new_instance;
    }
}

// Register the widget 
function sam_register_widget() {
    register_widget('Sam_Custom_Widget');
}
add_action('widgets_init', 'sam_register_widget');
