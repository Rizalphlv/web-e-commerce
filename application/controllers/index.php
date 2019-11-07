<?php
class index extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //$this->session->nama_session['data spesifik']
    }

    function index()
    {
        $data['user'] = $this->db->get_where('konsumen', ['email' => $this->session->userdata('client')])->row_array();
        $data['barang'] = $this->home->v_product()->result();


        $this->load->view('themplates/shop/header', $data)
            ->view('themplates/shop/sidenav', $data)
            ->view('themplates/shop/nav', $data)
            ->view('shop/index', $data)
            ->view('themplates/shop/footer', $data);
    }
}
