<?php

class c_kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->kategori->read_kategori();
        $this->load->view('themplates/header', $data);
        $this->load->view('themplates/navbar', $data);
        $this->load->view('themplates/sidebar', $data);
        $this->load->view('kategori/v_kategori', $data);
        $this->load->view('themplates/footer', $data);
        $this->load->view('themplates/footerjs', $data);
    }

    //view

    function tambah()
    {
        $this->load->view('kategori/v_kategori');
    }

    function aksi_tambah()
    {

        $nama_kategori = $this->input->post('nama_kategori');


        $data = array(
            'nama_kategori' => $nama_kategori

        );

        $this->kategori->input_kategori($data, 'kategori');
    }

    function edit_kategori($kd_kategori)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (isset($_POST['button_kategori'])) {




            $nama_kategori = $this->input->post('nama_kategori');


            $data = array(
                'nama_kategori' => $nama_kategori

            );

            $where = array(
                'kd_kategori' => $kd_kategori
            );

            $this->kategori->update_kategori($where, 'kategori', $data);
            redirect('c_kategori/index');
        } else {
            $where = array('kd_kategori' => $kd_kategori);
            $data['kategori'] = $this->kategori->edit_kategori($where, 'kategori')->row();
            $this->load->view('themplates/header', $data);
            $this->load->view('themplates/navbar', $data);
            $this->load->view('themplates/sidebar', $data);
            $this->load->view('kategori/v_edit', $data);
            $this->load->view('themplates/footer', $data);
            $this->load->view('themplates/footerjs', $data);
        }
    }
}
