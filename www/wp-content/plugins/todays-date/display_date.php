<?php   
    /* 
    Plugin Name: Today's Date
    Plugin URI: http://www.ben-poland-dev.com
    Description: Display The Current Day In A Customizable Format
    Author: Ben Poland 
    Version: 1.0 
    Author URI: http://www.ben-poland-dev.com
    */

    function displayTodaysDate( $atts )
    {
        return date(get_option('date_format'));
    }

    add_shortcode( 'date today', 'displayTodaysDate');
?>