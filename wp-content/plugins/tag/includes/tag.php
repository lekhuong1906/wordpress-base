<?php

add_action('admin_post_custom_add_data', 'custom_add_data_callback');
add_action('admin_post_nopriv_custom_add_data', 'custom_add_data_callback');

function custom_add_data_callback() {
    // Kiểm tra nonce để đảm bảo tính bảo mật
    if ( ! isset( $_POST['custom_data_nonce'] ) || ! wp_verify_nonce( $_POST['custom_data_nonce'], 'custom_data_action' ) ) {
        wp_die( 'Không hợp lệ!' );
    }

    // Lấy dữ liệu từ biểu mẫu
    $name = sanitize_text_field($_POST['name']);
    $description = sanitize_text_field($_POST['description']);

    // Thực hiện validate dữ liệu
    // if (empty()) {
    //     wp_die('Dữ liệu không được để trống!');
    // }

    // Thực hiện thêm mới dữ liệu (ví dụ: lưu vào cơ sở dữ liệu)
    // Thêm mã xử lý của bạn ở đây

    // Redirect hoặc hiển thị thông báo sau khi thêm mới thành công
    wp_redirect(admin_url('admin.php?page=your-plugin-page&success=true'));
    exit;
}
