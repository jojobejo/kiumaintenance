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
    public function deleveriorder()
    {
        $data['page_title'] = 'KARISMA - LOGISTIK';
        $data['deliveri']   = $this->M_Logistik->get_all_do();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/logistik/orderdriver.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/logistik/ajaxorderdriver');
    }
    public function tambahorderdriver()
    {
        $data['page_title'] = 'KARISMA - LOGISTIK';

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/logistik/tambahorderdriver.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/logistik/ajaxorderdriver');
    }
    public function addorderdeliv1()
    {
        $kdorder    = $this->input->post('kd_order_i');
        $tglorder   = $this->input->post('tgl_deliv_i');
        $nmdriver   = $this->input->post('nm_driver_i');
        $kdtruk     = $this->input->post('kd_truk_i');
        $destinasi  = $this->input->post('destinsasi_i');
        $nmtoko     = $this->input->post('nm_toko_i');
        if (!empty($kdorder) && !empty($tglorder) && !empty($nmdriver) && !empty($kdtruk) && !empty($destinasi) && !empty($nmtoko)) {
            foreach ($kdorder as $key => $value) {
                $this->db->insert('tb_log_tracking', $value);
            }
        }
        redirect('deliveriorder');
    }
    public function addorderdeliv()
    {
        $kdorder    = $this->input->post('kd_order_i');
        $tglorder   = $this->input->post('tgl_deliv_i');

        $dataOrder  = array(
            'kd_order'  => $kdorder,
            'tgl_jalan' => $tglorder,
        );

        $jumlah = count($this->input->post('nm_driver_i'));
        for ($i = 0; $i < $jumlah; $i++) {
            $data = array(
                'kd_deliveri' => $this->input->post('kd_order_i'),
                'tgl_jalan' => $this->input->post('tgl_deliv_i'),
                'kd_driver' => $this->input->post('nm_driver_i')[$i],
                'kd_truk' => $this->input->post('kd_truk_i')[$i],
                'destinasi' => $this->input->post('destinsasi_i')[$i],
                'nm_toko' => $this->input->post('nm_toko_i')[$i]
            );
            $this->M_Logistik->insert_detail_order_driver($data);
        }
        $this->M_Logistik->insert_deliveri_order($dataOrder);
        redirect('deliveriorder');
    }

    function select2driver()
    {
        $kduser = $this->input->post('nm_driver_i')[''];
        $data   = $this->M_Logistik->get_driver($kduser);
        echo json_encode($data);
    }

    public function det_deliveri($kd_deliveri)
    {
        $data['page_title'] = 'KARISMA - LOGISTIK';
        $data['order_deliv'] = $this->M_Logistik->get_order($kd_deliveri);
        $data['detail']   = $this->M_Logistik->get_det_deliv($kd_deliveri)->result();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/logistik/detailorder.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/logistik/ajaxlogistik.php');
        $this->load->view('content/logistik/modaldetaildriverorder.php');
    }
    public function add_pending_driver()
    {
        $id         = $this->input->post('id_isi');
        $kdorder    = $this->input->post('kd_deliv_isi');
        $tglorder   = $this->input->post('tgl_isi');
        $kddriver   = $this->input->post('driver_isi');
        $kdtruk     = $this->input->post('truk_isi');
        $destinasi  = $this->input->post('destinasi_isi');
        $nmtko      = $this->input->post('tko_isi');
        $notepnd    = $this->input->post('pnd_isi');

        $datapending = array(
            'kd_deliveri'   => $kdorder,
            'tgl_jalan'     => $tglorder,
            'kd_driver'     => $kddriver,
            'kd_truk'       => $kdtruk,
            'destinasi'     => $destinasi,
            'nm_toko'       => $nmtko,
            'note_pending'  => $notepnd
        );
        $this->M_Logistik->insert_pnd_driver($datapending);
        $this->M_Logistik->delete_tr_detail_driver($id);

        redirect('detail_deliveri/'.$kdorder);
    }
    public function det_driver($kdorder,$kddriver)
    {
        $data['page_title'] = 'KARISMA - LOGISTIK';
        $data['order_deliv'] = $this->M_Logistik->get_order($kdorder);
        $data['kd'] = $this->M_Logistik->get_kd($kdorder)->result();
        $data['detail']   = $this->M_Logistik->get_det_jalan_driver($kdorder,$kddriver)->result();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/logistik/detaildriver.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/logistik/ajaxlogistik.php');
        $this->load->view('content/logistik/modaldetaildriverorder.php');
    }
    public function driver_pending()
    {
        $data['page_title'] = 'KARISMA - LOGISTIK';
        $data['driver'] = $this->M_Logistik->get_pnd_driver()->result();
        
    }
}
