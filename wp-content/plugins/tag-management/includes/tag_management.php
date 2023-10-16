<?
function custom_admin_menu()
{
    add_menu_page(
        'Tag',   // Tiêu đề của trang
        'Tag Management',           // Tiêu đề của menu
        'manage_options',      // Quyền truy cập cần thiết (ở đây là 'manage_options')
        'tag-management', // Slug của menu
        'custom_tag_management', // Hàm để hiển thị trang
        'dashicons-cart',     // Đường dẫn đến biểu tượng của menu
        75                    // Vị trí trên menu
    );
}
add_action('admin_menu', 'custom_admin_menu');

function custom_tag_management(){
    require_once TAG_MANAGEMENT_PATH .'includes\templates\tag_management.php';
}