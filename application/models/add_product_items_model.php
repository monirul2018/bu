<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Product_Items_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    public function show_items(){
        $query = $this->db->get('product_items');
        $query_result = $query->result();
        return $query_result;
    }
    Public function insert_product_items($data){
// Inserting in Table(students) of Database(college)
        $this->db->insert('product_items', $data);
    }
}
?>