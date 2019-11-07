<?php  
    class m_barang extends CI_Model{
        function read_barang(){
            return $this->db->get('vbarang');
        }

        function input_data($table,$data){
            $this->db->insert($table,$data);
        }
        
        function get_brg_by_id($where)
        {
             return $this->db->select("barang.*, kategori.*")
             ->from("barang")
             ->join("kategori", "kategori.kd_kategori = barang.kd_kategori")
             ->where("barang.kd_brg",$where)
             ->get()->row();
            
             
        }
        
        function get_ktgr()
        {
            return $this->db->get('kategori')->result();
        }

        function update_data($where,$table,$data){
            $this->db->where($where);
           return $this->db->update($table,$data);
        }

        function delete_data($table,$where){
            $this->db->where("kd_brg",$where);
            return $this->db->delete($table);
        }

    }
?>