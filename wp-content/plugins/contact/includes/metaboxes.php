<?php 

function contact_meta_box_product(){
    add_meta_box(
         'contact_product_info',            //ID
         'Product Detail',                  //Box Title
         'meta_box_product',                //Function Callback
         'products'                          //Post Type
    );
}

function meta_box_product(){
    include_once CONTACT_PATH.'includes\templates\metaboxes.php';
}

//Handle data (geting data is submited)

function contact_save_post($post_id){     //id post

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  // auto save when brower is closed
        return $post_id;


    if ($_REQUEST['post_type'] == 'products'){           //check post type
       
        $product_price = $_REQUEST['product_price'];
        // $sale_off = $_REQUEST['saleoff'];
        // $quantity = $_REQUEST['quantity'];
         
        //save in db
         update_post_meta($post_id,'product_price',$product_price);
        // update_post_meta($post_id,'sale_off',$sale_off);
        // update_post_meta($post_id,'quantity',$quantity);

    }
} 
/*----------------MAIN------------------*/

add_action('add_meta_boxes','contact_meta_box_product');
add_action('    ','contact_save_post');


