<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Userdata');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('upload'); // Load library upload
    }

    public function index()
    {
        $data['message'] = ''; // Inisialisasi variabel pesan

        // Check if the user already submitted the form
        $id_anggota = $this->session->userdata('id_anggota');

        // Periksa apakah data sudah ada untuk id_anggota yang sedang login
        $existing_data = $this->Userdata->get_calon_kader_by_id_anggota($id_anggota);

        // Jika data sudah ada, kirimkan data untuk ditampilkan di formulir
        if (!empty($existing_data)) {
            $data['form_data'] = $existing_data;
        }

        $this->load->view('formulir', $data);
    }

    public function submit()
    {
        if ($this->session->userdata('user_login') != 'user_logged_in') {
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda harus login atau register terlebih dahulu!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('UserAuth');
        }

        $id_anggota = $this->session->userdata('id_anggota');
        $existing_data = $this->Userdata->get_calon_kader_by_id_anggota($id_anggota);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Rumah', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $data['form_data'] = $existing_data;
            $data['message'] = validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '</div>');
            $this->load->view('formulir', $data);
        } else {
            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['file_name'] = time() . '-' . $_FILES['foto']['name'];

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('foto')) {
                    $error = $this->upload->display_errors();
                    log_message('error', 'Upload error: ' . $error);
                    $data['form_data'] = $existing_data;
                    $data['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Terjadi kesalahan saat mengupload foto: ' . $error . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    $this->load->view('formulir', $data);
                    return;
                }

                $upload_data = $this->upload->data();
                $foto = $upload_data['file_name'];
            } else {
                $foto = !empty($existing_data) ? $existing_data['foto'] : null;
            }

            $formData = array(
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'foto' => $foto,
                'id_anggota' => $id_anggota
            );

            if (!empty($existing_data)) {
                if ($this->Userdata->update_calon_kader($id_anggota, $formData)) {
                    $data['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diperbarui.</div>';
                } else {
                    $data['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Terjadi kesalahan saat memperbarui data.</div>';
                }
            } else {
                if ($this->Userdata->add_calon_kader($formData)) {
                    $this->session->set_userdata($formData);
                    redirect('home/kta');
                } else {
                    $data['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Terjadi kesalahan saat mengirim formulir.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                }
            }

            $data['form_data'] = $this->Userdata->get_calon_kader_by_id_anggota($id_anggota);
            redirect('home/kta');
        }
    }
}