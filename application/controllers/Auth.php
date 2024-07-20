<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Userdata');
    } 

    public function index()
    {
        if ($this->session->userdata('login') != 'zpmlogin') {
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == false) {
                $data['title'] = 'Login page';
                $this->load->view('template/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('template/auth_footer');
            } else {
                // Validasi berhasil
                $this->_login();
            }
        } else {
            redirect('Panel');
        }
    }

    private function _login()
    {
        $email = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('p_user', ['username' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'login' => 'zpmlogin',
                    'id_user' => $user['id_user']
                ];
                $this->session->set_userdata($data);
                redirect('Panel');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Wrong Password!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username is not registered!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }
    
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('id_user');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Anda telah berhasil keluar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('auth');
    }
}
?>
