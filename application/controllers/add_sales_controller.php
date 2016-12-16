<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Sales_Controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('add_sales_model');
    }
   public function index(){
// Loading model to fetch all records from database
        $data['members'] = $this->add_sales_model->show_members();
        $this->load->view('admin/add_sales', $data);
    }
    public function add_collections(){
// Loading model to fetch all records from database
        $data['members'] = $this->add_sales_model->show_members();
        $this->load->view('admin/add_collections', $data);
    }
    public function members_list(){
// Loading model to fetch all records from database
        $data['members'] = $this->add_sales_model->show_members();
        $this->load->view('admin/members_list', $data);
    }
    public function supplier_list(){
// Loading model to fetch all records from database
        $data['supplier'] = $this->add_supplier_model->show_supplier();
        $this->load->view('admin/supplier_list', $data);
    }
    public function collections_list(){
// Loading model to fetch all records from database
        $this->load->model('Add_Collections_Models');
        $data['collections'] = $this->Add_Collections_Models->show_collections();
        $this->load->view('admin/collections_list', $data);
    }
    public function sales_list(){
// Loading model to fetch all records from database
        $this->load->model('Add_Sales_Model');
        $data['sales'] = $this->Add_Sales_Model->show_sales();
        $this->load->view('admin/sales_list', $data);
    }
    public function add_product(){
// Loading model to fetch all records from database
        $this->load->model('Add_supplier_Model');
        $data['supplier'] = $this->Add_supplier_Model->show_supplier();
        $this->load->model('Add_product_items_Model');
        $data['items'] = $this->Add_product_items_Model->show_items();
        $this->load->view('admin/add_product', $data);
    }

// Validation Function
    function error(){
        $this->load->library('form_validation');
        $abcd = $this->input->post('s_name');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('s_name', 'Name :', 'required|callback_select_validate');
        $this->form_validation->set_rules('s_qty', 'QTY :', 'required|number_validate');
        $this->form_validation->set_rules('s_date', 'Date :', 'required|datetime_validate'); // Validating select option field.
        $this->form_validation->set_rules('s_nots', 'Notes  :', 'required|min_length[1]|max_length[45]'); // Validating select option field.
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else{
            echo "<script>alert('Form Submitted Successfully....!!!! ');</script>";
            $this->index();
        }
    }
// Below function is called for validating select option field.
    function select_validate($abcd)
    {
// 'none' is the first option that is default "-------Choose City-------"
        if($abcd=="none"){
            $this->form_validation->set_message('select_validate', 'Please Select Your City.');
            return false;
        } else{
// User picked something.
            return true;
        }
    }

}
?>