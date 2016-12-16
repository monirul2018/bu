<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Supplier_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    public function show_supplier(){
        $query = $this->db->get('supplier');
        $query_result = $query->result();
        return $query_result;
    }
    Public function insert_supplier($data){
// Inserting in Table(students) of Database(college)
        $this->db->insert('supplier', $data);
    }
}
?>