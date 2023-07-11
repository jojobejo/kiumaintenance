<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Logistik extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Logistik');
    }

    public function index()
    {

        $data['page_title'] = 'KARISMA - LOGISTIK';

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/logistik/bodylogistik.php', $data);
        $this->load->view('partial/main/footer.php');
    }

    public function op_plat()
    {
        $data['page_title'] = 'KARISMA - LOGISTIK';
        $data['dataplat']   = $this->M_Logistik->getallplat();
        $data['driver']    = $this->M_Logistik->getAllDriver();
        $data['kd_driver']  = $this->M_Logistik->kd_driver();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/logistik/bodyopplat.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/logistik/ajaxlogistik');
    }
    public function addplat()
    {
        $kdplat = $this->input->post('kd_plat_isi');
        $noplat = $this->input->post('plat_isi');

        $dataplat = array(
            'noplat'    => $noplat,
            'nm_truk'   => $kdplat
        );
        $this->M_Logistik->addnoplatbaru($dataplat);
        redirect('opplat');
    }
    public function editplat()
    {
        $id     = $this->input->post('id_isi');
        $kdplat = $this->input->post('kd_plat_isi');
        $noplat = $this->input->post('plat_isi');

        $dataplat = array(
            'noplat'    => $noplat,
            'nm_truk'   => $kdplat
        );
        $this->M_Logistik->editnoplat($id, $dataplat);
        redirect('opplat');
    }
    public function hapusplat()
    {
        $id     = $this->input->post('id_isi');

        $this->M_Logistik->deletenoplat($id);
        redirect('opplat');
    }
    public function driverop()
    {
        $data['page_title'] = 'KARISMA - LOGISTIK';
        $data['dataplat']   = $this->M_Logistik->getallplat();
        $data['driver']     = $this->M_Logistik->getAllDriver();
        $data['kd_driver']  = $this->M_Logistik->kd_driver();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/logistik/bodydriver.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/logistik/ajaxlogistik');
    }
    public function addriver()
    {
        $kd_driver  = $this->input->post('kd_driver');
        $nmdriver   = $this->input->post('driver_isi');
        $stsisi     = $this->input->post('sts_select');

        $dataplat = array(
            'kd_driver' => $kd_driver,
            'nama_driver'   => $nmdriver,
            'status'   => $stsisi
        );
        $this->M_Logistik->adddriverbaru($dataplat);
        redirect('driverop');
    }
    public function editdriver()
    {
        $kd_driver  = $this->input->post('kd_driver');
        $nmdriver   = $this->input->post('driver_isi');

        $dataplat = array(
            'kd_driver' => $kd_driver,
            'nama_driver'   => $nmdriver,
        );
        $this->M_Logistik->editdriver($kd_driver, $dataplat);
        redirect('driverop');
    }
    public function activedrver($kd_driver)
    {
        $dataupdate = array(
            'status' => 'ACTIVE'
        );
        $this->M_Logistik->editdriver($kd_driver, $dataupdate);
        redirect('driverop');
    }
    public function nonactivedriver($kd_driver)
    {
        $dataupdate = array(
            'status' => 'NON-ACTIVE'
        );
        $this->M_Logistik->editdriver($kd_driver, $dataupdate);
        redirect('driverop');
    }
    public function hapusdriver()
    {
        $id     = $this->input->post('id_isi');

        $this->M_Logistik->hapusdriver($id);
        redirect('driverop');
    }
    public function tambahpenggunadriver()
    {
        
    }
}
