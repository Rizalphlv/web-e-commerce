<?php

class about_product extends CI_Controller
{

    public function product_desc($kd_brg)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->home->about_product(['kd_brg' => $kd_brg], 'vbarang');



        $this->load->view('themplates/shop/det_header', $data)
            ->view('themplates/shop/sidenav', $data)
            ->view('themplates/shop/nav', $data)
            ->view('shop/detail_product', $data)
            ->view('themplates/shop/footer', $data);
    }
}
