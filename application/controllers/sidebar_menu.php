<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');


class Sidebar_Menu extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/add_members');
    }
    public function supplier()
    {
        $this->load->view('admin/add_supplier');
    }
    public function product_items()
    {
        $this->load->view('admin/add_product_items');
    }
    public function sales()
    {
        $this->load->view('admin/add_sales');
    }
    public function admin_index()
    {
        $this->load->view('admin/admin_index');
    }
    public function select_view()
    {
        $this->load->view('admin/select_view');
    }
    public function members_list()
    {
        $this->load->view('admin/members');
    }
}