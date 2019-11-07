<?php
class m_transaksi extends CI_Model
{
    function read_transaksi()
    {
        return $this->db->get('vtransaksi');
    }
    function info($where, $data)
    {
        return $this->db->get_where($data, $where);
    }
}
