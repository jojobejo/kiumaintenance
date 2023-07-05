<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function __construct()
    {
        parent::__construct();
		$this->load->model('M_User');
    }

	public function index()
	{
		$data['page_title'] = 'User Account';

        $this->load->view('partial/main/header.php',$data);
        $this->load->view('content/user/admin.php', $data);
        $this->load->view('partial/main/footer.php');
	}
}
