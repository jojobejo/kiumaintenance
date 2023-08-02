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
        $this->load->view('content/hrd/laptamubody.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/hrd/ajaxhrd.php');
    }

    // FUNGSI CRUD
    public function tambah_lap_tamu()
    {
        $tanggal = $this->input->post('tanggal');
        $nama = $this->input->post('nama');
        $perusahaan = $this->input->post('perusahaan');
        $alamat = $this->input->post('alamat');
        $jumlahpersonil = $this->input->post('jumlahpersonil');
        $tujuan = $this->input->post('tujuan');
        $jammasuk = $this->input->post('jammasuk');
        $jamkeluar = $this->input->post('jamkeluar');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tanggal' => $tanggal,
            'nama' => $nama,
            'perusahaan' => $perusahaan,
            'alamat' => $alamat,
            'jumlahpersonil' => $jumlahpersonil,
            'tujuan' => $tujuan,
            'jammasuk' => $jammasuk,
            'jamkeluar' => $jamkeluar,
            'keterangan' => $keterangan,

        );
        $this->M_Hrd->addlaptamuhrd($data);
        redirect('hrd_lap_tamu');
    }
    public function edit_lap_tamu()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $nama = $this->input->post('nama');
        $perusahaan = $this->input->post('perusahaan');
        $alamat = $this->input->post('alamat');
        $jumlahpersonil = $this->input->post('jumlahpersonil');
        $tujuan = $this->input->post('tujuan');
        $jammasuk = $this->input->post('jammasuk');
        $jamkeluar = $this->input->post('jamkeluar');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'id' => $id,
            'tanggal' => $tanggal,
            'nama' => $nama,
            'perusahaan' => $perusahaan,
            'alamat' => $alamat,
            'jumlahpersonil' => $jumlahpersonil,
            'tujuan' => $tujuan,
            'jammasuk' => $jammasuk,
            'jamkeluar' => $jamkeluar,
            'keterangan' => $keterangan,
        );
        $this->M_Hrd->editlaptamu($id, $data);
        redirect('hrd_lap_tamu');
    }
    public function hapus_lap_tamu_hrd()
    {
        $id     = $this->input->post('id_isi');

        $this->M_Hrd->hapus_lap_tamu_hrd($id);
        redirect('hrd_lap_tamu');
    }



    //karyawan keluar masuk
    public function lap_karykm()
    {
        $data['page_title'] = 'KARISMA';
        $data['laporan']    = $this->M_Hrd->get_all_laporan_karykm()->result();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/hrd/lapkaryawankmbody.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/hrd/ajaxhrd.php');
    }

    // FUNGSI CRUD
    public function tambah_lap_karykm()
    {
        $tanggal = $this->input->post('tanggal');
        $nama = $this->input->post('nama');
        $departemen = $this->input->post('departemen');
        $status = $this->input->post('status');
        $jammasuk = $this->input->post('jammasuk');
        $jamkeluar = $this->input->post('jamkeluar');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tanggal' => $tanggal,
            'nama' => $nama,
            'departemen' => $departemen,
            'status' => $status,
            'jammasuk' => $jammasuk,
            'jamkeluar' => $jamkeluar,
            'keterangan' => $keterangan,

        );
        $this->M_Hrd->addlapkarykm($data);
        redirect('hrd_lap_Karyawan_KM');
    }
    public function edit_lap_karykm()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $nama = $this->input->post('nama');
        $departemen = $this->input->post('departemen');
        $status = $this->input->post('status');
        $jammasuk = $this->input->post('jammasuk');
        $jamkeluar = $this->input->post('jamkeluar');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'id' => $id,
            'tanggal' => $tanggal,
            'nama' => $nama,
            'status' => $status,
            'departemen' => $departemen,
            'jammasuk' => $jammasuk,
            'jamkeluar' => $jamkeluar,
            'keterangan' => $keterangan,
        );
        $this->M_Hrd->editlapkarykm($id, $data);
        redirect('hrd_lap_Karyawan_KM');
    }
    public function hapus_lap_karykm()
    {
        $id     = $this->input->post('id_isi');

        $this->M_Hrd->hapuslapkarykm($id);
        redirect('hrd_lap_Karyawan_KM');
    }


    //karyawan expedisi
    public function lap_expedisi()
    {
        $data['page_title'] = 'KARISMA';
        $data['laporan']    = $this->M_Hrd->get_all_laporan_expedisi()->result();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/hrd/lapexpedisibody.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/hrd/ajaxhrd.php');
    }

    // FUNGSI CRUD
    public function tambah_lap_expedisi()
    {
        $tanggal = $this->input->post('tanggal');
        $jammasuk = $this->input->post('jammasuk');
        $jamkeluar = $this->input->post('jamkeluar');
        $nopol = $this->input->post('nopol');
        $namadriver = $this->input->post('namadriver');
        $notlpndriver = $this->input->post('notlpndriver');
        $perusahaanpengirim = $this->input->post('perusahaanpengirim');
        $namabarang = $this->input->post('namabarang');
        $jumlahbarang = $this->input->post('jumlahbarang');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tanggal' => $tanggal,
            'jammasuk' => $jammasuk,
            'jamkeluar' => $jamkeluar,
            'nopol' => $nopol,
            'namadriver' => $namadriver,
            'notlpndriver' => $notlpndriver,
            'perusahaanpengirim' => $perusahaanpengirim,
            'namabarang' => $namabarang,
            'jumlahbarang' => $jumlahbarang,
            'keterangan' => $keterangan,

        );
        $this->M_Hrd->addlapexpedisi($data);
        redirect('hrd_lap_expedisi');
    }
    public function edit_lap_expedisi()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $jammasuk = $this->input->post('jammasuk');
        $jamkeluar = $this->input->post('jamkeluar');
        $nopol = $this->input->post('nopol');
        $namadriver = $this->input->post('namadriver');
        $notlpndriver = $this->input->post('notlpndriver');
        $perusahaanpengirim = $this->input->post('perusahaanpengirim');
        $namabarang = $this->input->post('namabarang');
        $jumlahbarang = $this->input->post('jumlahbarang');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'id' => $id,
            'tanggal' => $tanggal,
            'jammasuk' => $jammasuk,
            'jamkeluar' => $jamkeluar,
            'nopol' => $nopol,
            'namadriver' => $namadriver,
            'notlpndriver' => $notlpndriver,
            'perusahaanpengirim' => $perusahaanpengirim,
            'namabarang' => $namabarang,
            'jumlahbarang' => $jumlahbarang,
            'keterangan' => $keterangan,
        );
        $this->M_Hrd->editlapexpedisi($id, $data);
        redirect('hrd_lap_expedisi');
    }
    public function hapus_lap_expedisi()
    {
        $id     = $this->input->post('id_isi');

        $this->M_Hrd->hapuslapexpedisi($id);
        redirect('hrd_lap_expedisi');
    }


    //laporan issue
    public function lap_issue()
    {
        $data['page_title'] = 'KARISMA';
        $data['laporan']    = $this->M_Hrd->get_all_laporan_issue()->result();

        $this->load->view('partial/main/header.php', $data);
        $this->load->view('content/hrd/lapissuebody.php', $data);
        $this->load->view('partial/main/footer.php');
        $this->load->view('content/hrd/ajaxhrd.php');
    }

    // FUNGSI CRUD
    public function tambah_lap_issue()
    {
        $tanggal = $this->input->post('tanggal');
        $issue = $this->input->post('issue');
        $lokasi = $this->input->post('lokasi');
        $nama = $this->input->post('nama');

        $data = array(
            'tanggal' => $tanggal,
            'issue' => $issue,
            'lokasi' => $lokasi,
            'nama' => $nama,
        );
        $this->M_Hrd->addlapissue($data);
        redirect('hrd_lap_issue');
    }
    public function edit_lap_issue()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $issue = $this->input->post('issue');
        $lokasi = $this->input->post('lokasi');
        $nama = $this->input->post('nama');

        $data = array(
            'id' => $id,
            'tanggal' => $tanggal,
            'issue' => $issue,
            'lokasi' => $lokasi,
            'nama' => $nama,
        );
        $this->M_Hrd->editlapissue($id, $data);
        redirect('hrd_lap_issue');
    }
    public function hapus_lap_issue()
    {
        $id     = $this->input->post('id_isi');

        $this->M_Hrd->hapuslapissue($id);
        redirect('hrd_lap_issue');
    }
}
