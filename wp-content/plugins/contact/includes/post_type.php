<?php
// Register Post Type

function custom_post_type() {
    $labels = array(
        'name' => 'Cookie Management',  //main page name
        'singular_name' => 'Cookie',
        
            'menu_name' => 'Cookie OCT', //menu name
            // 'add_new' => '4',  //menu list + button add
            // 'all_items' => '8', //,menu list + button all

        'add_new_item' => 'Cookie Management',  //add page name
        // 'edit_item' => '6',     //edit page name
        // 'view_item' => '7',
            
                'search_items' => '9', // item search
        'not_found' => '10',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5, // Vị trí trên menu
        'menu_icon' => 'dashicons-cart', // Biểu tượng menu (thay đổi thành biểu tượng thích hợp)
        // 'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        // 'rewrite' => array('slug' => 'products'), // Đường dẫn tùy chỉnh
    );

    register_post_type('products', $args);
}

add_action('init', 'custom_post_type');


//Register Taxonomy Type

function custom_taxonomy() {
    $labels = array(
        'name' => 'Loại sản phẩm',
        'singular_name' => 'Loại sản phẩm',
        'menu_name' => 'Loại sản phẩm',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true, // Để taxonomy này giống với danh mục
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product-category'), // Đường dẫn tùy chỉnh cho taxonomy
    );

    register_taxonomy('product_category', 'products', $args);
}

add_action('init', 'custom_taxonomy');


add_action('init','custom_post_type');
add_action( 'init', 'custom_taxonomy' );


