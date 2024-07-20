<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Userdata');
	}

	public function index()
	{
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['artikel'] = $this->Userdata->getartikel()->result();
		$data['setting'] = $this->Userdata->getsetting()->row();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php', $data);
		$this->load->view('home/home', $data);
		$this->load->view('template/home_footer.php', $data);
	}

	// Other methods...

	public function profil()
	{
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['artikel'] = $this->Userdata->getartikel()->result();
		$data['profil'] = $this->Userdata->getprofil()->row();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php', $data);
		$this->load->view('profil/index', $data);
		$this->load->view('template/home_footer.php', $data);
	}

	public function kegiatan()
	{
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['artikel'] = $this->Userdata->getartikel()->result();
		$data['kegiatan'] = $this->Userdata->getkegiatan()->row();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php', $data);
		$this->load->view('kegiatan/index', $data);
		$this->load->view('template/home_footer.php', $data);
	}
	public function galeri_kegiatan()
	{
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['artikel'] = $this->Userdata->getartikel()->result();
		$data['galeri_kegiatan'] = $this->Userdata->getgaleri_kegiatan()->row();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php', $data);
		$this->load->view('galeri_kegiatan/index', $data);
		$this->load->view('template/home_footer.php', $data);
	}

	public function blog()
	{
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['kategori'] = $this->Userdata->getkategori()->result();
		$data['allartik'] = $this->Userdata->getallartikel()->result();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php', $data);
		$this->load->view('blog/index', $data);
		$this->load->view('template/home_footer.php', $data);
	}

	public function formulir()
	{
		if ($this->session->userdata('user_login') != 'user_logged_in') {
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda harus login atau register terlebih dahulu!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('UserAuth');
		}

		$id_anggota = $this->session->userdata('id_anggota');
		$anggota = $this->Userdata->get_data_by_id($id_anggota);


		$data['anggota'] = $anggota[0];
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php', $data);
		$this->load->view('formulir/index');
		$this->load->view('template/home_footer.php', $data);
	}

	public function kta()
	{
		// Get the id_anggota from session
		$id_anggota = $this->session->userdata('id_anggota');

		if (!$id_anggota) {
			// Jika id_anggota tidak ditemukan di session, redirect ke halaman login
			redirect('UserAuth');
		}

		// Get data from the model
		$anggota = $this->Userdata->get_data_by_id($id_anggota);

		if (empty($anggota)) {
			show_error('Data anggota tidak ditemukan.');
		}

		// Get additional data
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['anggota'] = $anggota[0]; // Asumsikan get_data_by_id mengembalikan array of array

		// Memuat tampilan KTA
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php', $data);
		$this->load->view('kta/index', $data);
		$this->load->view('template/home_footer.php', $data);
	}
}