<?php
defined('BASEPATH') or exit('No direct script access allowed');


class C_Inventaris extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Inventaris');
    }

    public function index()
    {
        $data['page_title'] = 'KIU MAINTENANCE'; 
        $data['datainventaris']   = $this->M_Inventaris->getAllinventaris();

        $this->load->view('partial/main/header.php', $data); 
        $this->load->view('content/inventaris/bodyadmin.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/inventaris/ajaxinventaris.php');
    }

    function selectowner()
    {
        $kduser = $this->input->post('kd_user');
        $data = $this->M_Inventaris->getUser($kduser);
        echo json_encode($data);
    }

    public function addInventaris()
    {
        $kdinventaris  = $this->input->post('kdinventaris');
        $kdpic   = $this->input->post('kdpic');
        $stsisi     = $this->input->post('sts_select');

        $dataplat = array(
            'kd_driver' => $kd_driver,
            'kdpic'   => $kdpice,
            'status'   => $stsisi
        );
        $this->M_Logistik->adddriverbaru($dataplat);
        redirect('truckoprational');
    }
    public function addriver1()
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
        redirect('truckoprational');
    }
    
    public function editInventaris()
    {
    }
    public function deleteInventaris()
    {
    }
    public function changeOwner()
    {
    }
    public function addKatagoriInventaris()
    {
    }
    public function editKatagoriInventaris()
    {
    }
    public function deleteKatagoriInventaris()
    {
    }
    public function viewUserInventaris()
    {
    }
}
