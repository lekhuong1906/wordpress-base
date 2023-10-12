<?php
/*
 * Plugin Name:       Contact Plugin
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
 * Domain Path:       /languages
 */
define('CONTACT_PATH',plugin_dir_path(__FILE__));
define('CONTACT_URI',plugin_dir_url(__FILE__));

register_activation_hook(__FILE__,'contact_plugin_activation');

function contact_plugin_activation(){
    echo "Contact plugin activation";
}

register_deactivation_hook(__FILE__,'contact_plugin_deactivation');
function contact_plugin_deactivation(){
    echo "Contact plugin contact_plugin_deactivation";
}


include_once CONTACT_PATH.' includes/include.php';