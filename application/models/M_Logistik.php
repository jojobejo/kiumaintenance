<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Logistik extends CI_Model
{
    //Truck Plat Config
    public function getallplat()
    {
        return $this->db->get('tb_op_plat')->result();
    }
    public function addnoplatbaru($data)
    {
        return $this->db->insert('tb_op_plat', $data);
    }
    public function editnoplat($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_op_plat', $data);
    }
    public function deletenoplat($id)
    {
        return $this->db->delete('tb_op_plat', array("id" => $id));
    }
    //Driver Config
    public function getalldriver()
    {
        return $this->db->get('tb_op_driver')->result();
    }
    public function adddriverbaru($data)
    {
        return $this->db->insert('tb_op_driver', $data);
    }
    public function editdriver($id, $data)
    {
        $this->db->where('kd_driver', $id);
        return $this->db->update('tb_op_driver', $data);
    }
    public function hapusdriver($id)
    {
        return $this->db->delete('tb_op_driver', array("id" => $id));
    }
    function kd_driver()
    {
        $cd = $this->db->query("SELECT MAX(RIGHT(kd_driver,4)) AS kd_max FROM tb_op_driver WHERE DATE(create_at)=CURDATE()");
        $kd = "";
        if ($cd->num_rows() > 0) {
            foreach ($cd->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return 'KIU' . date('dmy') . $kd;
    }
    function get_kd_order()
    {
        $cd = $this->db->query("SELECT MAX(RIGHT(kd_order,4)) as kd_max FROM tb_order_tracking_driver WHERE DATE(create_at)=CURDATE()");
        $kd = "";
        if ($cd->num_rows() > 0) {
            foreach ($cd->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return 'KIUD' . date('dmy') . $kd;
    }
    function insert_detail_order_driver($data)
    {
        return $this->db->insert('tb_det_tracking_driver', $data);
    }
    function insert_deliveri_order($data)
    {
        return $this->db->insert('tb_order_tracking_driver', $data);
    }
    function get_all_do()
    {
        $this->db->select('*');
        $this->db->select('COUNT(DISTINCT(b.kd_driver)) as jml_driver');
        $this->db->select('COUNT(DISTINCT(b.destinasi)) as jml_destinasi');
        $this->db->select('COUNT(DISTINCT(b.nm_toko)) as jml_toko');
        $this->db->from('tb_order_tracking_driver a');
        $this->db->join('tb_det_tracking_driver b', 'b.kd_deliveri = a.kd_order');
        $this->db->group_by('a.kd_order');
        return $this->db->get()->result();
    }
    public function get_driver($kduser)
    {
        $this->db->select('*');
        $this->db->limit('6');
        $this->db->from('tb_op_driver');
        $this->db->like('nama_driver', $kduser);
        return $this->db->get()->result_array();
    }
    function get_order($kd)
    {
        $this->db->select('*');
        $this->db->from('tb_order_tracking_driver');
        $this->db->where('kd_order', $kd);
        $this->db->limit(1);
        return $this->db->get()->result();
    }
    function get_det_deliv($kd)
    {
        return $this->db->query("SELECT 
        a.id,a.tgl_jalan, a.nm_toko, a.kd_deliveri , a.kd_driver ,b.nama_driver, a.kd_truk , c.noplat , a.destinasi ,COUNT(a.nm_toko) AS jml_toko 
        FROM tb_det_tracking_driver a JOIN tb_op_driver b ON b.kd_driver = a.kd_driver JOIN tb_op_plat c ON c.nm_truk = a.kd_truk 
        WHERE a.kd_deliveri = '$kd' 
        GROUP BY a.kd_driver");
    }
    function get_det_jalan_driver($kdorder, $driver)
    {
        return $this->db->query("SELECT a.id, a.kd_deliveri , a.destinasi,a.tgl_jalan ,a.kd_driver ,b.nama_driver, a.kd_truk , c.noplat , a.nm_toko FROM tb_det_tracking_driver a JOIN tb_op_driver b ON b.kd_driver = a.kd_driver JOIN tb_op_plat c ON c.nm_truk = a.kd_truk WHERE a.kd_deliveri = '$kdorder' AND a.kd_driver = '$driver';");
    }
    public function get_kd($kd)
    {
        return $this->db->query("SELECT a.id, a.kd_deliveri , a.destinasi,a.tgl_jalan ,a.kd_driver ,b.nama_driver, a.kd_truk , c.noplat , a.nm_toko FROM tb_det_tracking_driver a JOIN tb_op_driver b ON b.kd_driver = a.kd_driver JOIN tb_op_plat c ON c.nm_truk = a.kd_truk WHERE a.kd_deliveri = '$kd' LIMIT 1");
    }
    function insert_pnd_driver($data)
    {
        return $this->db->insert_batch('tb_driver_pending', $data);
    }
    function delete_tr_detail_driver($id)
    {
        return $this->db->delete('tb_det_tracking_driver', array("id" => $id));
    }
    function get_pnd_driver()
    {
        return $this->db->query("SELECT a.kd_deliveri , a.tgl_jalan , c.nama_driver , b.noplat , a.kd_truk , a.destinasi , COUNT(a.nm_toko) AS jml_toko ,a.note_pending, a.kd_driver
        FROM tb_driver_pending a
        join tb_op_plat b ON b.nm_truk = a.kd_truk
        JOIN tb_op_driver c ON c.kd_driver = a.kd_driver
        GROUP BY a.kd_deliveri , a.kd_driver
        ");
    }
    function get_det_driver_pnd($kd1, $kd2)
    {
        return $this->db->query("SELECT a.id,a.kd_deliveri , a.tgl_jalan , c.nama_driver , b.noplat , a.kd_truk , a.destinasi ,a.nm_toko ,a.note_pending, a.kd_driver
        FROM tb_driver_pending a
        join tb_op_plat b ON b.nm_truk = a.kd_truk
        JOIN tb_op_driver c ON c.kd_driver = a.kd_driver
        WHERE a.kd_deliveri = '$kd1' AND a.kd_driver = '$kd2'");
    }
    public function get_kd_det_pnd($kd)
    {
        return $this->db->query("SELECT a.id, a.kd_deliveri , a.destinasi,a.tgl_jalan ,a.kd_driver ,b.nama_driver, a.kd_truk , c.noplat , a.nm_toko FROM tb_det_tracking_driver a JOIN tb_op_driver b ON b.kd_driver = a.kd_driver JOIN tb_op_plat c ON c.nm_truk = a.kd_truk WHERE a.kd_deliveri = '$kd' LIMIT 1");
    }
    public function get_all_driver()
    {
        return $this->db->get('tb_op_driver')->result();
    }
    public function select_kd_truk($search)
    {
        $this->db->select('*');
        $this->db->limit('6');
        $this->db->from('tb_op_plat');
        $this->db->like('nm_truk', $search);
        return $this->db->get()->result_array();
    }
}
