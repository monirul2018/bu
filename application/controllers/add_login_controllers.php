<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_login_Controllers extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('add_login_model');
    }
    public function index()
    {
        $this->load->view('admin/login');
    }

}