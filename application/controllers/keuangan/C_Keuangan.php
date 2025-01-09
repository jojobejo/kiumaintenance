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
            // $data['page_title'] = 'KARISMA - KEUANGAN';
            // $this->load->view('content/keuangan/body.php', $error, $data);
        } else {
            $fileData = $this->upload->data();
            $filePath = './uploads/' . $fileData['file_name'];

            $this->processCSV($filePath);

            // $data['success'] = 'File berhasil diupload dan diproses.';

            // $data['page_title'] = 'KARISMA - KEUANGAN';
            // $this->load->view('partial/main/header.php', $data);
            // $this->load->view('content/keuangan/body.php', $data);
            // $this->load->view('partial/main/footer.php');
            redirect('keuangan');
        }
    }
    private function processCSV($filePath)
    {
        $handle = fopen($filePath, "r");
        if ($handle !== FALSE) {

            fgetcsv($handle);

            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $csvData = array(
                    'nm_suplier' => $data[0],
                    'nm_barang'  => $data[1],
                    'satuan'     => $data[2],
                    'qty'        => $data[3],
                    'dimensi'    => $data[4]
                );
                $this->db->insert('tb_dailystock', $csvData);
            }
            fclose($handle);
        }
        unlink($filePath);
    }
}
