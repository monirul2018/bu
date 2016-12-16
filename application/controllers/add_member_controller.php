<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_Member_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Add_member_model');
    }

    Public function index()
    {
        $data["view_member"]=$this->Add_member_model->view_member();
//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        //Validating User Name Field
        $this->form_validation->set_rules('m_user_name', 'User Name :', 'required|min_length[1]|max_length[45]');
        //Validating Password  Field
        $this->form_validation->set_rules('password', 'Password :', 'required|min_length[1]|max_length[45]');

//Validating Name Field
        $this->form_validation->set_rules('m_name', 'Name :', 'required|min_length[1]|max_length[45]');

//Validating Email Field
        $this->form_validation->set_rules('m_email', 'Email :', 'required|valid_email');

//Validating Mobile no. Field
        //   $this->form_validation->set_rules('m_contact', 'Contact No.', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
        $this->form_validation->set_rules('m_address', 'Address', 'required|min_length[1]|max_length[59]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/add_members');
        } else {
//Setting values for tabel columns
            $data = array(
                'm_user_name' => $this->input->post('m_user_name'),
                'password' => $this->input->post('password'),
                'm_name' => $this->input->post('m_name'),
                'm_email' => $this->input->post('m_email'),
                'm_contact' => $this->input->post('m_contact'),
                'm_address' => $this->input->post('m_address')
            );
//Transfering data to Model
            $this->Add_member_model->insert_member($data);
            $data['message'] = 'Data Inserted Successfully';
//Loading View
            $this->load->view('admin/admin_index', $data);
        }
    }
    Public function members_view($data)
    {
        $this->load->model("Add_member_model");
        $data["view_member"]=$this->Add_member_model->view_member();
        $this->load->view("admin/members_list", $data);
    }

}
?>
