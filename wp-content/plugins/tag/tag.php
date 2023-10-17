<?php
/*
 * Plugin Name:       Tag Plugin
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
 * Text Domain:       tag-plugin
 * Domain Path:       /languages
 */


define('TAG_PATH', plugin_dir_path(__FILE__));
define('TAG_URI', plugin_dir_url(__FILE__));

include_once TAG_PATH . 'includes\include.php';

register_activation_hook(__FILE__, 'contact_plugin_activation');

function contact_plugin_activation()
{
}



add_action('admin_menu', function(){
    add_menu_page(
        'Tag',   // Tiêu đề của trang
        'Tag Management',           // Tiêu đề của menu
        'manage_options',      // Quyền truy cập cần thiết (ở đây là 'manage_options')
        'tag-management', // Slug của menu
        'custom_tag_management', // Hàm để hiển thị trang
        'dashicons-cart',     // Đường dẫn đến biểu tượng của menu
        75                    // Vị trí trên menu
    );
});
   

add_filter('manage_edit-post_tag_columns', function(){
    $columns['edit'] = 'Edit'; // Thêm cột "Edit"
    return $columns;
});


function add_edit_action_column($columns) {
    $columns['edit'] = 'Edit'; // Thêm cột "Edit"
    return $columns;
}
add_filter('manage_edit-post_tag_columns', 'add_edit_action_column');

function display_edit_action($value, $column_name, $term_id) {
    if ($column_name == 'edit') {
        $edit_url = esc_url(add_query_arg(array('page' => 'edit-tag', 'tag_ID' => $term_id), 'admin.php'));
        return "<a href='$edit_url'>Edit</a>";
    }
    return $value;
}
add_filter('manage_post_tag_custom_column', 'display_edit_action', 10, 3);



function custom_tag_management(){
    include_once TAG_PATH. 'includes\templates\tag_dashboard.php';
}


register_deactivation_hook(__FILE__, 'contact_plugin_deactivation');
function contact_plugin_deactivation()
{
}
