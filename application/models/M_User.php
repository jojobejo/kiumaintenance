<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_User extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tb_user')->result();
    }

    public function addUser($data)
    {
        return $this->db->insert('user', $data);
    }

    public function editUser($iduser, $data)
    {
        $this->db->where('id_user', $iduser);
        return $this->db->update('user', $data);
    }

    public function deleteUser($iduser)
    {
        $this->db->where('id_user', $iduser);
        return $this->db->delete('tb_user');
    }
}
