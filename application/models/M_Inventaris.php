<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Inventaris extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tb_user')->result();
    }

    public function addDataInventaris($data)
    {
        return $this->db->insert('tb_itinventariskomputer', $data);
    }

    public function editInventaris($iduser, $data)
    {
        $this->db->where('id_inven', $iduser);
        return $this->db->update('tb_itinventariskomputer', $data);
    }

    public function deleteInventaris($iduser)
    {
        $this->db->where('id_inven', $iduser);
        return $this->db->delete('tb_itinventariskomputer');
    }
    public function getUser($kduser)
    {
        $this->db->select('*');
        $this->db->limit('6');
        $this->db->from('tb_user');
        $this->db->like('nama_user', $kduser);
        return $this->db->get()->result_array();
    }
}
