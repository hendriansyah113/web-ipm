<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAuth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Userdata'); // Model untuk user
    } 

    public function index()
    {
        if ($this->session->userdata('user_login') != 'user_logged_in') {
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == false) {
                $data['title'] = 'User Login';
                $this->load->view('template/auth_header', $data);
                $this->load->view('auth/user_login'); // Load the user login view
                $this->load->view('template/auth_footer');
            } else {
                // Validasi berhasil
                $this->_login();
            }
        } else {
            redirect('Home'); // Ganti 'UserPanel' sesuai dengan controller yang digunakan setelah login
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->Userdata->get_user($username);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'user_login' => 'user_logged_in',
                    'id_anggota' => $user['id_anggota']
                ];
                $this->session->set_userdata($data);
                redirect('Home/formulir'); // Redirect to the desired page after login
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Wrong Password!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('UserAuth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username is not registered!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('UserAuth');
        }
    }

    public function register()
    {
        if ($this->session->userdata('user_login') == 'user_logged_in') {
            redirect('Home');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[p_regis.username]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ];

            $this->Userdata->add_user_anggota($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Registration successful!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('UserAuth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('user_login');
        $this->session->unset_userdata('id_anggota');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Anda telah berhasil keluar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('UserAuth');
    }
}
?>
