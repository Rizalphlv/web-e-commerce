<?php
class c_barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('upload');
    }

    function index()
    {
        $this->load->library('form_validation');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->barang->read_barang()->result();
        $data['kategori'] = $this->barang->get_ktgr();

        $this->form_validation->set_rules('kd_brg', 'kode barang', 'required');
        $this->form_validation->set_rules('nama_brg', 'nama barang', 'required');
        $this->form_validation->set_rules('warna', 'warna barang', 'required');
        $this->form_validation->set_rules('harga', 'harga barang', 'numeric');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('keyword', 'keyword', 'required');
        $this->form_validation->set_rules('ukuran', 'ukuran', 'required');
        $this->form_validation->set_rules('berat', 'berat', 'numeric');
        $this->form_validation->set_rules('stok', 'stok', 'numeric');
        $this->form_validation->set_rules('diskon', 'diskon', 'numeric');

        if ($this->form_validation->run()) {
            $this->aksi_tambah($data);
        } else {

            $this->load->view('themplates/header', $data);
            $this->load->view('themplates/navbar', $data);
            $this->load->view('themplates/sidebar', $data);
            $this->load->view('barang/v_barang', $data);
            $this->load->view('themplates/footer', $data);
            $this->load->view('themplates/footerjs', $data);
        }
    }

    //view



    function aksi_tambah($data)
    {

        $kd_brg = $this->input->post('kd_brg');
        $nama = $this->input->post('nama_brg');
        $warna = $this->input->post('warna');
        $harga = $this->input->post('harga');
        $keyword = $this->input->post('keyword');
        $kategori = $this->input->post('kategori');
        $ukuran = $this->input->post('ukuran');
        $berat = $this->input->post('berat');
        $stok = $this->input->post('stok');
        $diskon = $this->input->post('diskon');

        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 10024;


        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar')) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('themplates/header', $data);
            $this->load->view('themplates/navbar', $data);
            $this->load->view('themplates/sidebar', $data);
            $this->load->view('barang/v_barang', $data);
            $this->load->view('themplates/footer', $data);
            $this->load->view('themplates/footerjs', $data);
        } else {
            $image = array('upload_data' => $this->upload->data('file_name'));

            $data = array(
                'kd_brg' => $kd_brg,
                'nama_brg' => $nama,
                'warna' => $warna,
                'harga' => $harga,
                'keyword' => $keyword,
                'kd_kategori' => $kategori,
                'diskon' => $diskon,
                'ukuran' => $ukuran,
                'berat' => $berat,
                'stok' => $stok,
                'gambar' => $image["upload_data"]

            );

            $this->barang->input_data('barang', $data);
            redirect("c_barang/index");
        }
    }

    function edit($kd_brg)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (isset($_POST['button'])) {

            $nama = $this->input->post('nama_brg');
            $warna = $this->input->post('warna');
            $harga = $this->input->post('harga');
            $keyword = $this->input->post('keyword');
            $kategori = $this->input->post('kategori');
            $diskon = $this->input->post('diskon');

            $data = array(
                'nama_brg' => $nama,
                'warna' => $warna,
                'harga' => $harga,
                'keyword' => $keyword,
                'kd_kategori' => $kategori,
                'diskon' => $diskon
            );

            $where = array(
                'kd_brg' => $kd_brg
            );



            $this->barang->update_data($where, 'barang', $data);
            redirect('c_barang/index');
        } else {
            $where = $kd_brg;
            $data['barang'] = $this->barang->get_brg_by_id($where);
            $data['kategori'] = $this->barang->get_ktgr();

            $this->load->view('themplates/header', $data);
            $this->load->view('themplates/navbar', $data);
            $this->load->view('themplates/sidebar', $data);
            $this->load->view('barang/v_edit', $data);
            $this->load->view('themplates/footer', $data);
            $this->load->view('themplates/footerjs', $data);
        }
    }

    function hapus($kd_brg)
    {

        $this->barang->delete_data('barang', $kd_brg);
        redirect('c_barang/index');
    }
}
