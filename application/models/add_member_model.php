<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Member_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    Public function insert_member($data){
// Inserting in Table(students) of Database(college)
        $this->db->insert('members', $data);
    }
    function show_students(){
        $query = $this->db->get('members');
        $query_result = $query->result();
        return $query_result;
    }
}
?>