<?php

class Tag 
{
    private $data;

    public function __construct()
    {
        global $wpdb;
        $this->data = $wpdb->prefix . 'data'; //table wp_posts
    }

    public function get(){
        global $wpdb;
        $sql = "SELECT * FROM $this->data";
        $items =  $wpdb->get_results($sql);
        return $items;
    }

    public function find($id){
        global $wpdb;
        $sql = "SELECT * FROM $this->data WHERE id = $id";
        $item =  $wpdb->get_row($sql);
        return $item;
    }

}