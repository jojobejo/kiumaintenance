<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class M_Keuangan extends CI_Model
{

    function daily_stock()
    {
        return $this->db->query("SELECT
        a.nm_suplier AS suplier,
        a.nm_barang AS namabarang,
        a.satuan AS satuan,
        a.qty AS qty,
        FLOOR((a.qty / a.dimensi)) AS qty_box,
        a.qty-(FLOOR((a.qty / a.dimensi))*a.dimensi) AS qty_pcs
        FROM tb_dailystock a
        ")->result();
    }
}
