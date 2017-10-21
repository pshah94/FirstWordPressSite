<?php
/*
Plugin Name: My Name Is Parth
*/
function name_shortcodes_init()
{
    function name_shortcode($atts = [], $content = null)
    {
        
        $content .= "Parth Shah - 7982382";
        return $content;
    }
    add_shortcode('name-student-plugin', 'name_shortcode');
}
add_action('init', 'name_shortcodes_init');

?>