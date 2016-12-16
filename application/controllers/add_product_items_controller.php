<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Product_Items_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Add_Product_Items_Model');
    }
    Public function index()
    {
//Including validation library
        $this->load->library('form_validation');
//Validating Product Items Field
        $this->form_validation->set_rules('p_items', 'Product Items:', 'required|min_length[1]|max_length[45]');

//Validating Unit Name Field
        $this->form_validation->set_rules('unit_name', 'Unit Name :', 'required|min_length[1]|max_length[45]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/add_product_items');
        } else {
//Setting values for tabel columns
            $data = array(
                'p_items' => $this->input->post('p_items'),
                'unit_name' => $this->input->post('unit_name')
            );
//Transfering data to Model
            $this->Add_Product_Items_Model->insert_product_items($data);
            $data['message'] = 'Data Inserted Successfully';
//Loading View
            $this->load->view('admin/admin_index', $data);
        }

    }
}

?>
