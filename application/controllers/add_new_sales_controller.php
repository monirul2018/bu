<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_New_Sales_Controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('add_sales_model');
    }
    public function index()
    {

        $data = array(
                's_name' => $this->input->post('s_name'),
                's_qty' => $this->input->post('s_qty'),
                's_date' => $this->input->post('s_date'),
                's_nots' => $this->input->post('s_nots')
            );
            //Transfering data to Model
            $this->add_sales_model->insert_sales($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            $this->load->view('admin/admin_index', $data);
        }

}