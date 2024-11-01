<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Schedule extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Hrd');
    }

    public function index()
    {
        $data['page_title']  = 'Schedule Direktur';
        $data['getschedule'] = $this->M_Hrd->getdataschedule()->result();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/schedule/body.php', $data);
        $this->load->view('content/schedule/ajaxschedule.php', $data);
        $this->load->view('partial/main/footer.php');
    }
    public function addschedule()
    {
        $tanggal        = $this->input->post('tgl');
        $jam            = $this->input->post('jam');
        $instansi       = $this->input->post('instansi');
        $pic            = $this->input->post('pic');
        $estimasiwaktu  = $this->input->post('estimasi');
        $tujuan         = $this->input->post('tujuan');

        $addschedule = array(
            'tanggal'       => $tanggal,
            'jam'           => $jam,
            'suplier'       => $instansi,
            'pic'           => $pic,
            'estimasi_end'  => $estimasiwaktu,
            'tujuan'        => $tujuan,
            'status'        => '1',
            'keterangan'    => '-',
        );
        $this->M_Hrd->insertchedule($addschedule);
        redirect('schedule_direktur');
    }
}
