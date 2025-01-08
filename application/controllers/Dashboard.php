<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Logistik');
        $this->load->model('M_Hrd');
    }

    public function index()
    {

        $lvuser     = $this->session->userdata('lv');

        if ($lvuser == '1') {
            $data['page_title'] = 'KARISMA';
            $this->load->view('partial/main/header.php', $data);
            $this->load->view('content/logistik/body.php', $data);
            $this->load->view('partial/main/footer.php');
        } elseif ($lvuser == '5') {
            $data['page_title'] = 'KARISMA';
            $data['tamu']   = $this->hrd->getdataschedule()->result();
            $this->load->view('partial/main/header.php', $data);
            $this->load->view('content/list_tamu_dirut.php', $data);
            $this->load->view('partial/main/footer.php');
        } else {
            $data['page_title'] = 'KARISMA';
            $this->load->view('partial/main/header.php', $data);
            $this->load->view('content/body-karyawan.php', $data);
            $this->load->view('partial/main/footer.php');
        }
    }
}
