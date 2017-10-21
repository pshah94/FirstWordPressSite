<?php
/*
Plugin Name: sclaus
*/
function sclaus_shortcodes_init()
{
    function sclaus_shortcode($atts = [], $content = null)
    {
        $imgs = array('http://www.fbwhatsapquotes.com/wp-content/uploads/2016/12/HD-Santa-Claus-HD-Wallpapers-2016.jpeg','https://i.ytimg.com/vi/nxOyqE1d0tI/maxresdefault.jpg');
        $content .=  "<img src='".$imgs[1]."' alt ='santaclaus' />";
        return $content;
    }
    add_shortcode('sclaus-plugin', 'sclaus_shortcode');
}
add_action('init', 'sclaus_shortcodes_init');

?>