<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Sales_Model extends CI_Model{
//function to run select all query from students table
   public function show_members(){
        $query = $this->db->get('members');
        $query_result = $query->result();
        return $query_result;
    }
    public function show_sales(){
        $query = $this->db->get('sales');
        $query_result = $query->result();
        return $query_result;
    }
    public function insert_sales($data){
        $this->db->insert('sales', $data);
    }
}
?>