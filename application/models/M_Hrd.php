<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class M_Hrd extends CI_Model
{
    public function get_all_laporan()
    {
        return $this->db->query("SELECT a.*
        FROM tb_lap_distribusi a
        ");
    }
    public function addlapdistribusihrd($data)
    {
        return $this->db->insert('tb_lap_distribusi', $data);
    }
    public function editlapdistribusihrd($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_lap_distribusi', $data);
    }
    public function hapus_lap_distribusi_hrd($id)
    {
        return $this->db->delete('tb_lap_distribusi', array("id" => $id));
    }

    public function addlaptamuhrd($data)
    {
        return $this->db->insert('tb_tamu', $data);
    }
    public function editlaptamu($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_tamu', $data);
    }
    public function hapus_lap_tamu_hrd($id)
    {
        return $this->db->delete('tb_tamu', array("id" => $id));
    }
    public function get_all_tamu()
    {
        return $this->db->query("SELECT a.*
        FROM tb_tamu a
        ");
    }
    //karyawan keluar masuk 

    public function get_all_laporan_karykm()
    {
        return $this->db->query("SELECT a.*
        FROM tb_karyawan_keluarmasuk a
        ");
    }
    public function addlapkarykm($data)
    {
        return $this->db->insert('tb_karyawan_keluarmasuk', $data);
    }
    public function editlapkarykm($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_karyawan_keluarmasuk', $data);
    }
    public function hapuslapkarykm($id)
    {
        return $this->db->delete('tb_karyawan_keluarmasuk', array("id" => $id));
    }

    //laporan Expedisi

    public function get_all_laporan_expedisi()
    {
        return $this->db->query("SELECT a.*
         FROM tb_expedisi a
         ");
    }
    public function addlapexpedisi($data)
    {
        return $this->db->insert('tb_expedisi', $data);
    }
    public function editlapexpedisi($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_expedisi', $data);
    }
    public function hapuslapexpedisi($id)
    {
        return $this->db->delete('tb_expedisi', array("id" => $id));
    }

    //issue

    public function get_all_laporan_issue()
    {
        return $this->db->query("SELECT a.*
        FROM tb_issue a
        ");
    }
    public function export_lap_issue()
    {
        return $this->db->get('tb_issue')->result();
    }
    public function addlapissue($data)
    {
        return $this->db->insert('tb_issue', $data);
    }
    public function editlapissue($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_issue', $data);
    }
    public function hapuslapissue($id)
    {
        return $this->db->delete('tb_issue', array("id" => $id));
    }
    public function cari_lap_distribusi($v1, $v2)
    {
        return $this->db->query("SELECT a.*
        FROM tb_lap_distribusi a
        WHERE $v1 LIKE '$v2'
        ");
    }
    public function get_all_truk_service_histori()
    {
        return $this->db->query("SELECT a.*
        FROM tb_service_truk a
        ");
    }
    public function update_km_service($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_service_truk', $data);
    }
    public function get_all_karyawan()
    {
        return $this->db->query("SELECT a.*
        FROM tb_user a WHERE id > '4'
        ");
    }
    public function update_karyawan($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_user', $data);
    }
    public function add_karyawan($data)
    {
        return $this->db->insert('tb_user', $data);
    }

    // SERVER - SIDE SYSTEM 

    // AllStok
    var $table = 'tb_issue';
    var $column_order = array('tanggal', 'issue', 'lokasi', 'nama', 'id');
    var $column_search = array('issue', 'lokasi', 'nama');
    var $order = array('tanggal' => 'ASC');

    
}
