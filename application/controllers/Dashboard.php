<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Logistik');
    }

    public function index()
    {
        $data['page_title'] = 'KARISMA';
        $data['logistik'] = $this->M_Logistik->get_all_do()->result();

        $this->load->view('partial/main/header.php',$data);
        $this->load->view('content/body.php', $data);
        $this->load->view('partial/main/footer.php');
    }
    
}
