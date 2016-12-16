<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Admin_Index_Controller extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/admin_index');
    }
}
