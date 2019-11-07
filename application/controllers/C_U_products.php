<?php

class C_U_products extends CI_Controller
{
    function list_products()
    {
        $data['user'] = $this->db->get_where('konsumen', ['email' => $this->session->userdata('client')])->row_array();
        $data['barang'] = $this->home->list_products()->result();

        $this->load->view('themplates/shop/det_header', $data)
            ->view('themplates/shop/sidenav', $data)
            ->view('themplates/shop/nav', $data)
            ->view('shop/products', $data)
            ->view('themplates/shop/footer', $data);
    }
}
