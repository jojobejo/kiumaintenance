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

        $this->load->view('partial/main/header.php',$data);
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
