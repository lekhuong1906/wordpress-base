<?php
function custom_admin_menu()
{
    add_menu_page(
        'Cài đặt Sản phẩm',   // Tiêu đề của trang
        'Sản phẩm',           // Tiêu đề của menu
        'manage_options',      // Quyền truy cập cần thiết (ở đây là 'manage_options')
        'get-post', // Slug của menu
        'display_custom_product_settings', // Hàm để hiển thị trang
        'dashicons-cart',     // Đường dẫn đến biểu tượng của menu
        75                    // Vị trí trên menu
    );
}
add_action('admin_menu', 'custom_admin_menu');

function display_custom_product_settings()
{
?>
    <div class="wrap">
        <h2>Product Information</h2>
        <div class="inline-block">
            <button class="button-primary float-left">Add New Product</button>
            <div class="search-box float-right">
                <input type="text" class="search" placeholder="Search Products">
                <input type="submit" class="button" value="Search">
            </div>
        </div>
        <table class="wp-list-table widefat striped">
            <thead>
                <tr>
                    <th><b></b></th>
                    <th><b>Name</b></th>
                    <th>Tag</th>
                    <th>Position</th>
                    <th>Installation Page</th>
                    <th>Satus</th>
                    <th>Registration Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width: 5%;"><input type="checkbox" id="select-all"></td>
                    <td>[Google Analytics] Global site tag</td>
                    <td>Product</td>
                    <td>Head</td>
                    <td>Thank Page</td>
                    <td>Active</td>
                    <td class="text-right">Thu Oct 12 2023 GMT+ 0700 (Indochina Time)</td>
                </tr>
                <tr>
                    <td style="width: 5%;"><input type="checkbox" id="select-all"></td>
                    <td>2</td>
                    <td>Product B</td>
                    <td>$25.00</td>
                    <td>75</td>
                </tr>
                <!-- Add more product rows here -->
            </tbody>
        </table>
    </div>
<?php
}
