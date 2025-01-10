<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Keuangan extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Keuangan');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->database();
    }

    public function index()
    {
        $data['page_title']     = 'KARISMA - KEUANGAN';
        $data['stock']          = $this->M_Keuangan->daily_stock();
        $data['count']          = $this->M_Keuangan->countbarang();
        date_default_timezone_set("Asia/Jakarta");
        $data['kd']             = $this->M_Keuangan->generate_update();
        $data['updated']        = $this->M_Keuangan->get_last_update();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/keuangan/body.php', $data);
        $this->load->view('partial/main/footer.php');
    }

    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('csv_file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $fileData = $this->upload->data();
            $filePath = './uploads/' . $fileData['file_name'];
            
            $this->processCSV($filePath);
            $this->update_data();

            redirect('keuangan');
        }
    }
    private function update_data()
    {
        $kd     = $this->input->post('kdgenerates');
        $date   = $this->input->post('dateupload');

        $data  = array(
            'kd_update'     => $kd,
            'last_update'   => $date
        );

        $this->M_Keuangan->insertupdate($data);
    }
    private function processCSV($filePath)
    {
        $handle = fopen($filePath, "r");
        if ($handle !== FALSE) {

            fgetcsv($handle);

            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $csvData = array(
                    'kd_suplier' => $data[1],
                    'kd_barang'  => $data[2],
                    'qty'        => $data[3],
                );
                $this->db->insert('tb_dailystock', $csvData);
            }
            fclose($handle);
        }
        unlink($filePath);
    }

    public function truncateitm($kd)
    {
        $this->M_Keuangan->truncateitm();
        $this->M_Keuangan->deleteupdateed($kd);
        redirect('keuangan');
    }
}
