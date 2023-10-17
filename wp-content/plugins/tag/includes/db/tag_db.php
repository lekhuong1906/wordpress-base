<?php

class Tag 
{
    private $_posts = '';

    public function __construct()
    {
        global $wpdb;
        $this->_posts = $wpdb->prefix . 'wp_posts'; //table wp_posts
    }

    public function get_page(){
        global $wpdb;
        $sql = "SELECT * FROM $this->_posts ";
        $query = "SELECT * FROM $wpdb->posts WHERE post_type = 'page' AND post_status = 'publish'";
        $items =  $wpdb->get_results($query);
        return $items;
    }

}