<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Hrd extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Hrd');
    }

    public function index()
    {
        $data['page_title'] = 'KARISMA';

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/body.php', $data);
        $this->load->view('partial/main/footer.php');
    }
    // TAMPILAN HALAMAN
    public function lap_distribusi()
    {
        $data['page_title'] = 'KARISMA';
        $data['laporan']    = $this->M_Hrd->get_all_laporan()->result();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/hrd/lapbody.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/hrd/ajaxhrd.php');
    }
    // FUNGSI CRUD
    public function input_lap_distribusi()
    {
        $nopol = $this->input->post('nopol');
        $nolambung = $this->input->post('nolambung');
        $nm_driver = $this->input->post('nm_driver');
        $nm_helper = $this->input->post('nm_helper');
        $tujuan = $this->input->post('tujuan');
        $tgl_keluar = $this->input->post('tgl_keluar');
        $jm_keluar = $this->input->post('jm_keluar');
        $km_keluar = $this->input->post('km_keluar');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $jm_masuk = $this->input->post('jm_masuk');
        $km_masuk = $this->input->post('km_masuk');
        $keterangan = $this->input->post('keterangan');
        $inputer = $this->session->userdata('nama_user');

        $data = array(
            'nopol' => $nopol,
            'nolambung' => $nolambung,
            'namadriver' => $nm_driver,
            'namahelper' => $nm_helper,
            'tujuan' => $tujuan,
            'tglkeluar' => $tgl_keluar,
            'jamkeluar' => $jm_keluar,
            'kmkeluar' => $km_keluar,
            'tglmasuk' => $tgl_masuk,
            'jammasuk' => $jm_masuk,
            'kmmasuk' => $km_masuk,
            'keterangan' => $keterangan,
            'inputer' => $inputer,
        );
        $this->M_Hrd->addlapdistribusihrd($data);
        redirect('hrd_lap_distribusi');
    }
    public function edit_lap_distribusi()
    {
        $id = $this->input->post('id_isi');
        $nopol = $this->input->post('nopol');
        $nolambung = $this->input->post('nolambung');
        $nm_driver = $this->input->post('nm_driver');
        $nm_helper = $this->input->post('nm_helper');
        $tujuan = $this->input->post('tujuan');
        $tgl_keluar = $this->input->post('tgl_keluar');
        $jm_keluar = $this->input->post('jm_keluar');
        $km_keluar = $this->input->post('km_keluar');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $jm_masuk = $this->input->post('jm_masuk');
        $km_masuk = $this->input->post('km_masuk');
        $keterangan = $this->input->post('keterangan');
        $inputer = $this->session->userdata('nama_user');

        $data = array(
            'nopol' => $nopol,
            'nolambung' => $nolambung,
            'namadriver' => $nm_driver,
            'namahelper' => $nm_helper,
            'tujuan' => $tujuan,
            'tglkeluar' => $tgl_keluar,
            'jamkeluar' => $jm_keluar,
            'kmkeluar' => $km_keluar,
            'tglmasuk' => $tgl_masuk,
            'jammasuk' => $jm_masuk,
            'kmmasuk' => $km_masuk,
            'keterangan' => $keterangan,
            'inputer' => $inputer,
        );
        $this->M_Hrd->editlapdistribusihrd($id, $data);
        redirect('hrd_lap_distribusi');
    }
    public function hapus_lap_distribusi_hrd()
    {
        $id     = $this->input->post('id_isi');

        $this->M_Hrd->hapus_lap_distribusi_hrd($id);
        redirect('hrd_lap_distribusi');
    }

    public function lap_tamu()
    {
        $data['page_title'] = 'KARISMA';
        $data['laporan']    = $this->M_Hrd->get_all_tamu()->result();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/hrd/lapbody.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/hrd/ajaxhrd.php');
    }
}
