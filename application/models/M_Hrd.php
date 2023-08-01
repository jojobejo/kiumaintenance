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
    public function get_all_tamu()
    {
        return $this->db->query("SELECT a.*
        FROM tb_tamu a
        ");
    }
}
