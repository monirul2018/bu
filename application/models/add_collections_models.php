<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Collections_Models extends CI_Model{
//function to run select all query from students table
    public function show_collections(){
        $query = $this->db->get('collections');
        $query_result = $query->result();
        return $query_result;
    }
    public function insert_collections($data){
        $this->db->insert('collections', $data);
    }
}
?>