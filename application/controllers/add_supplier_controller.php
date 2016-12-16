<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Supplier_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Add_supplier_model');
    }
    Public function index() {
//Including validation library
        $this->load->library('form_validation');
//Validating Name Field
        $this->form_validation->set_rules('s_name', 'Supplier Name :', 'required|min_length[1]|max_length[45]');

//Validating Email Field
        $this->form_validation->set_rules('s_email', 'Supplier Email :', 'required|valid_email');

//Validating Mobile no. Field
        //   $this->form_validation->set_rules('s_contact', 'Supplier Contact No. :', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
        $this->form_validation->set_rules('s_address', 'Supplier Address :', 'required|min_length[1]|max_length[59]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/add_supplier');
        } else {
//Setting values for tabel columns
            $data = array(
                's_name' => $this->input->post('s_name'),
                's_email' => $this->input->post('s_email'),
                's_contact' => $this->input->post('s_contact'),
                's_address' => $this->input->post('s_address')
            );
//Transfering data to Model
            $this->Add_supplier_model->insert_supplier($data);
            $data['message'] = 'Data Inserted Successfully';
//Loading View
            $this->load->view('admin/admin_index', $data);
        }
    }

}

?>
