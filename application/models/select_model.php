<?php
class select_model extends CI_Model{
//function to run select all query from students table
    function show_students(){
        $query = $this->db->get('members');
        $query_result = $query->result();
        return $query_result;
    }
}
?>