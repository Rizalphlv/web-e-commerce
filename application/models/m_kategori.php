<?php
    class m_kategori extends CI_Model{
        function read_kategori(){
            return $this->db->get('kategori')->result();
        }

        function input_kategori($data,$table){
            $this->db->insert($table,$data);
        }

        function edit_kategori($where,$data){
            return $this->db->get_where($data,$where);
        }

        function update_kategori($where,$table,$data){
            $this->db->where($where);
            $this->db->update($table,$data);
        }
        function delete_kategori($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
    }

?>