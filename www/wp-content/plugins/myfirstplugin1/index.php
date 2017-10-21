<?php
/*
Plugin Name: Todays date by parth
*/
function todaysdate_shortcodes_init()
{
    function todaysdate_shortcode($atts = [], $content = null)
    {
        
        $content .= date('d/m/Y');
        return $content;
    }
    add_shortcode('todaysdate-plugin', 'todaysdate_shortcode');
}
add_action('init', 'todaysdate_shortcodes_init');

?>