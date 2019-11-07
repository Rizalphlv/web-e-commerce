<?php

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email Harus Di Isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'password Harus Di Isi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'E-commers | Login Page';
            $this->load->view('themplates/auth_header', $data);
            $this->load->view("auth/login");
            $this->load->view('themplates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('konsumen', ['email' => $email])->row_array();

        if ($user) {
            if ($user['in_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'client' => [
                            'email' => $user['email']
                        ]

                    ];

                    if ($user['level'] == 'admin') {
                        $this->session->set_userdata($data);
                        redirect('c_barang');
                    } else {
                        $this->session->set_userdata($data);
                        redirect('shop');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">Wrong password</div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-info" role="alert">This Email not been Activated</div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Email Is Not Registed</div>'
            );
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[konsumen.email]', [
            'is_unique' => 'Email Is Exsist'
        ]);
        $this->form_validation->set_rules('telpon', 'Telepon', 'required|trim|numeric|max_length[13]', [
            'max_length' => 'Nomor Telpon Tidak valid',
            'numeric' => 'Nomor Telpon Harus Menggunakan Angka'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password not Match',
            'min_length' => 'Password too Short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'E-commers Sign-Up';
            $this->load->view('themplates/auth_header', $data);
            $this->load->view("auth/regist");
            $this->load->view('themplates/auth_footer');
        } else {
            $data = [
                'email'    => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'telp'   => $this->input->post('telpon'),
                'in_active' => 1
            ];

            $this->db->insert('konsumen', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Account Has Been Created</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_clientdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout</div>');
        redirect('auth');
    }
}
