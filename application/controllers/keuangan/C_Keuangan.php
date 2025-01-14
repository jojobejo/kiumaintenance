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
        date_default_timezone_set("Asia/Jakarta");
        $data['stock']          = $this->M_Keuangan->daily_stock();
        $data['count']          = $this->M_Keuangan->countbarang();
        $data['kd']             = $this->M_Keuangan->generate_update();
        $data['updated']        = $this->M_Keuangan->get_last_update();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/keuangan/body.php', $data);
        $this->load->view('partial/main/footer.php');
    }

    public function insertmodule()
    {
        $data['page_title']     = 'KARISMA - KEUANGAN';

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/keuangan/coba1.php', $data);
        $this->load->view('partial/main/footer.php');
    }

    public function import()
    {
        $file_data = fopen($_FILES['csv_file']['tmp_name'], 'r');
        fgetcsv($file_data); // Skip header row

        $data = [];
        while ($row = fgetcsv($file_data)) {
            $data[] = [
                'kd_suplier'    => $row[0],
                'kd_barang'     => $row[1],
                'gudang'        => $row[2],
                'qty'           => $row[3]
            ];
        }
        if (!empty($data)) {
            $this->M_Keuangan->insert_batch($data);
            $this->session->set_flashdata('message', 'Data imported successfully.');
        } else {
            $this->session->set_flashdata('message', 'Failed to import data.');
        }
        redirect('insertmodule');
    }

    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('csv_file')) {

            $data = array('error' => $this->upload->display_errors());
            redirect('keuangan1', $data);
        } else {

            $fileData = $this->upload->data();
            $filePath = './uploads/' . $fileData['file_name'];

            $this->processCSV($filePath);
            $this->update_data();

            redirect('keuangan1');
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
        if ($handle) {
            $header = fgetcsv($handle);  // Read header row
            $batch_data = [];
            $batch_size = 500;  // Adjust batch size for better performance

            while (($row = fgetcsv($handle)) !== FALSE) {
                $data = array_combine($header, $row);
                $batch_data[] = $data;

                if (count($batch_data) >= $batch_size) {
                    $this->db->insert_batch('tb_dailystock', $batch_data);
                    $batch_data = [];  // Clear the batch data after insert
                }
            }

            if (!empty($batch_data)) {
                $this->db->insert_batch('tb_dailystock', $batch_data);
            }

            fclose($handle);
            echo "Data imported successfully!";
        } else {
            echo "Error opening the file.";
        }
    }

    public function truncateitm($kd)
    {
        $this->M_Keuangan->truncateitm();
        $this->M_Keuangan->deleteupdateed($kd);
        redirect('keuangan1');
    }
}
