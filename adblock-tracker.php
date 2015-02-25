<?php
/*
Plugin Name: Google Adsense Adblock Tracker
Plugin URI: http://www.idiotinside.com/google-adsense-adblock-tracker/
Description: Detects if user is using adblock or not and sends the tracking data to google analytics.
Version: 1.0.0
Author: Suresh Kumar
Author URI: http://www.idiotinside.com/
License: GPL2
*/

/* TADA */
function detect_adblock(){

    wp_enqueue_script('block-checker',plugin_dir_url(__FILE__) . 'block-checker.js',array(),'1.0',true);

}

add_action('wp_enqueue_scripts','detect_adblock');

