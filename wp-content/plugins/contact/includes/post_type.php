<?php



// Register Post Type

function contact_post_type(){
    //post - page - product
    register_post_type('products',
    array(
        'labels'      => array(
            'name'          => __('Products', 'contact-plugin'),
            'singular_name' => __('Product', 'contact-plugin'),
        ),
            'public'      => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    )
);
}

add_action('init','contact_post_type');

//Register Taxonomy Type

function register_taxonomy_post() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Category' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'posts', [ 'post' ], $args );
}
add_action( 'init', 'register_taxonomy_post' );


