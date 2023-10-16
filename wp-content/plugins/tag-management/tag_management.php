<?php
/*
 * Plugin Name:       Tag Management
 * Plugin URI:        #
 * Description:       Create Tag Management
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Undifine
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       tag-management
 * Domain Path:       /tag-management
 */

define('TAG_MANAGEMENT_PATH', plugin_dir_path(__FILE__));
define('TAG_MANAGEMENT_URI', plugin_dir_url(__FILE__));


function tag_management_activation(){}
function tag_management_deactivation(){}

/* --- MAIN --- */
register_activation_hook(__FILE__, 'tag_management_activation');
register_deactivation_hook(__FILE__, 'tag_management_deactivation');


require_once TAG_MANAGEMENT_PATH . 'includes\include.php';