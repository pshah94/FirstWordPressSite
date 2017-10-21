<?php
/*
Plugin Name: when is Cristmas
*/
function christmas_shortcodes_init()
{
    function christmas_shortcode($atts = [], $content = null)
    {
        /*
        $dChristmas = mktime(0, 0,0, 12, 25);
        $dtoday = mktime();
        $ndays = ($dChristmas - $dtoday)/(24*60*60);
        */
        $currDate =  new DateTime();

        $christmasDate =  new DateTime("2017-12-25"); 
        $diff = $currDate->diff($christmasDate);
        
        $content .=  $diff->days;  //date_diff(date($currDate), date($christmasDate)) ;
        return $content;
    }
    add_shortcode('christmas-plugin', 'christmas_shortcode');
}
add_action('init', 'christmas_shortcodes_init');

?>