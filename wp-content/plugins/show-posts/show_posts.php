<?php
/*
 * Plugin Name:       Show Post Plugin
 * Plugin URI:        #
 * Description:       Create contact plugin
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Undifine
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       contact-plugin
 * Domain Path:       /show-posts
 */

define('GET_POST_PATH', plugin_dir_path(__FILE__));
define('GET_POST_URI', plugin_dir_url(__FILE__));


function contact_plugin_activation(){}
function contact_plugin_deactivation(){}

/* --- MAIN --- */
register_activation_hook(__FILE__, 'contact_plugin_activation');
register_deactivation_hook(__FILE__, 'contact_plugin_deactivation');


include_once GET_POST_PATH . 'includes\include.php';

 