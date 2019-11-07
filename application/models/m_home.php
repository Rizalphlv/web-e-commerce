<?php
class m_home extends CI_Model
{
    public function v_product()
    {
        return $this->db->get('vbarang', 6, 0);
    }
    public function list_products()
    {
        return $this->db->get('vbarang');
    }
    public function about_product($where, $data)
    {
        return $this->db->get_where($data, $where)->row();
    }
}
