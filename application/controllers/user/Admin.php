<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    public function index()
    {
        $data['page_title'] = 'User Account';
        $data['alluser']    = $this->M_User->getAll();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/user/admin.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/user/ajaxUser.php');
    }

    public function addUser()
    {
        $kduser     = $this->input->post('kd_isis');
        $nmuser     = $this->input->post('nama_isi');
        $username   = $this->input->post('username_isi');
        $password   = $this->input->post('password_isi');
        $departemen = $this->input->post('');

        $dataUser = array(
            'kode_user' => $kduser,
            'username'  => $username,
            'password'  => $password,
            'nama_user' => $nmuser,
            'departemen' => $departemen
        );

        $this->M_User->addUser($dataUser);
        redirect('userAdmin');
    }
}
