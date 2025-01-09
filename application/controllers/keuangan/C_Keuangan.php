<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Keuangan extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Keuangan');
    }

    public function index()
    {
        $data['page_title'] = 'KARISMA - KEUANGAN';
        // $data['dataplat']   = $this->M_Logistik->getallplat();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/keuangan/body.php', $data);
        $this->load->view('partial/main/footer.php');
        
    }
}
