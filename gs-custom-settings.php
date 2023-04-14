<?php
/*
* Plugin Name: GreenShift - Custom Settings
* Plugin URI: #
* Description: Custom settings for GreenShift theme.
* Version: 1.0
* Author: Jedigital
* Author URI: https://jedigital.net/
* License: GPLv2 or later
* Text Domain: greenshift
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

//ACF Google Maps API
function my_acf_google_map_api($api)
{

    $api['key'] = 'AIzaSyCx33WC9R-IRNuFxIiiSQ_7OchIZs7Vcvo';

    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
