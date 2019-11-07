<?php

class c_transaksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin | Transaksi ';
        $data['transaksi'] = $this->transaksi->read_transaksi()->result();
        $this->load->view('themplates/header', $data)
            ->view('themplates/navbar', $data)
            ->view('themplates/sidebar', $data)
            ->view('transaksi/v_transaksi', $data)
            ->view('themplates/footer', $data)
            ->view('themplates/footerjs', $data);
    }

    function main()
    {
        $data['transaksi'] = $this->transaksi->read_transaksi()->result();
        $this->load->view('transaksi/v_main', $data);
    }

    function update_status($id, $status)
    {
        $update = array(
            'status' => $status
        );

        $where = array(
            'kd_trans' => $id
        );

        $this->db->where($where)->update('transaksi', $update);
    }

    function info($kd_trans)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('kd_trans' => $kd_trans);
        var_dump($where);
        die;
        $data['detail'] = $this->transaksi->info($where, 'det_transaksi')->row();
        $this->load->view('themplates/header', $data);
        $this->load->view('themplates/navbar', $data);
        $this->load->view('themplates/sidebar', $data);
        $this->load->view('transaksi/detail_trans', $data);
        $this->load->view('themplates/footer', $data);
        $this->load->view('themplates/footerjs', $data);
    }
}
