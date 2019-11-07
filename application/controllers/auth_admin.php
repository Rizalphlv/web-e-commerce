<?php

class auth_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
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
            $this->load->view("auth_admin/sign_in");
            $this->load->view('themplates/auth_footer');
        } else {
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email']
                    ];

                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">Wrong password</div>'
                    );
                    redirect('auth_admin');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-info" role="alert">This Email not been Activated</div>'
                );
                redirect('auth_admin');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Email Is Not Registed</div>'
            );
            redirect('auth_admin');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email Is Exsist'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password not Match',
            'min_length' => 'Password too Short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'E-commers Sign-Up';
            $this->load->view('themplates/auth_header', $data);
            $this->load->view("auth_admin/sign_up");
            $this->load->view('themplates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email'    => htmlspecialchars($this->input->post('email', true)),
                'telp'     => htmlspecialchars($this->input->post('no_telp', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'level'    => $this->input->post('level'),
                'is_active' => 1
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Account Has Been Created</div>');
            redirect('auth_admin');
        }
    }

    public function logout()
    {
        $this->session->unset_user('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout</div>');
        redirect('auth_user');
    }
}
