<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Collections_Controllers extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Add_Collections_Models');
    }
    public function index()
    {

        $data = array(
            'c_name' => $this->input->post('c_name'),
            'c_step' => $this->input->post('c_step'),
            'c_amount' => $this->input->post('c_amount'),
            'c_narration' => $this->input->post('c_narration'),
            'c_date' => $this->input->post('c_date')
        );
        //Transfering data to Model
        $this->Add_Collections_Models->insert_Collections($data);
        $data['message'] = 'Data Inserted Successfully';
        //Loading View
        $this->load->view('admin/admin_index', $data);
    }

}