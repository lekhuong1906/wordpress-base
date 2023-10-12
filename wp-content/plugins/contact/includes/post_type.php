<?php

add_action('init','contact_post_type');

// Register Post Type

function contact_post_type(){
    //post - page - product
    register_post_type('wporg_product',
    array(
        'labels'      => array(
            'name'          => __('Products', 'contact-plugin'),
            'singular_name' => __('Product', 'contact-plugin'),
        ),
            'public'      => true,
            'has_archive' => true,
            'rewire' => array('slug' => 'products'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    )
);
}

//Register Taxonomy Type

function wporg_register_taxonomy_course() {
    $labels = array(
        'name'              => _x( 'Courses', 'taxonomy general name' ),
        'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Courses' ),
        'all_items'         => __( 'All Courses' ),
        'parent_item'       => __( 'Parent Course' ),
        'parent_item_colon' => __( 'Parent Course:' ),
        'edit_item'         => __( 'Edit Course' ),
        'update_item'       => __( 'Update Course' ),
        'add_new_item'      => __( 'Add New Course' ),
        'new_item_name'     => __( 'New Course Name' ),
        'menu_name'         => __( 'Course' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'course', [ 'post' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_course' );


