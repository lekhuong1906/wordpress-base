<?php

class New_Post
{
    private $_posts = '';

    public function __construct()
    {
        global $wpdb;
        $this->_posts = $wpdb->prefix . 'wp_data'; //table wp_post
    }

    public function get()
    {
        global $wpdb;
        $sql = "SELECT * FROM $this->_posts ";
        $items =  $wpdb->get_results($sql);
        return $items;
    }

    public function paginate($limit)
    {
        $paged = 1;

        //Get all records
        global $wpdb;
        $sql =  "SELECT count(id)  FROM $this->_posts";
        $total_items = $wpdb->get_var($sql);
        
        //paging algorithm

        $total_pages = ceil($total_items/$limit);
        $offset = ($paged * $limit) - $limit;

        $sql = "SELECT * FROM $this->_posts";
        $sql .= "ORDER BY id DESC";
        $sql .= "LIMIT $limit OFFSET $offset";

        $items  = $wpdb->get_results($sql);
        return [
            'total_pages'=> $total_pages,

        ];
    }

    public function find($id){
        global $wpdb;
        $sql = "SELECT * FROM $this->_posts WHERE id = $id";
        $item = $wpdb->get_row($sql);
        return $item;
    }

    public function save($data){
        global $wpdb;
        $wpdb->insert($this->_posts,$data);
        $last_id = $wpdb->insert_id;
        $item = $this->find($last_id);
        return $item;
    }

    public function update($id,$data){
        global $wpdb;
        $wpdb->update($this->_posts,$data,['id'=>$id]);
        return true;
    }

    public function destroy($id){
        global $wpdb;
        $wpdb->delete($this->_posts,['id'=>$id]);
        return true;
    }
}
