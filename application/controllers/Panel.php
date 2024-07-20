<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Userdata');
        
	}

    public function index() {
        if ($this->session->userdata('login') != 'zpmlogin') {
            redirect('Auth');
        } else {
            $data['calon_kader'] = $this->Userdata->get_all_calon_kader();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('pug/index', $data);
            $this->load->view('template/panel_footer');
        }
    }

    public function setting(){
    	if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
    		redirect('panel') ;
    	}else{
    		$data['setting'] = $this->Userdata->getsetting()->row();
    		$this->load->view('template/panel_header');
		    $this->load->view('template/panel_menu');
		    $this->load->view('setting/index',$data);
		    $this->load->view('template/panel_footer');
    	}
    	
    }

    public function galeri_kegiatan(){
    	if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
    		redirect('panel') ;
    	}else{
    		$data['galeri_kegiatan'] = $this->Userdata->getgaleri_kegiatan()->row();
    		$this->load->view('template/panel_header');
		    $this->load->view('template/panel_menu');
		    $this->load->view('galeri_kegiatan/panel',$data);
		    $this->load->view('template/panel_footer');
    	}
    	
    }

    public function kegiatan(){
    	if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
    		redirect('panel') ;
    	}else{
    		$data['kegiatan'] = $this->Userdata->getkegiatan()->row();
    		$this->load->view('template/panel_header');
		    $this->load->view('template/panel_menu');
		    $this->load->view('kegiatan/panel',$data);
		    $this->load->view('template/panel_footer');
    	}
    	
    }

    public function profil(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
            redirect('panel') ;
        }else{
            $data['profil'] = $this->Userdata->getprofil()->row();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('profil/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function formulir(){
        if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != 1) {
            redirect('panel');
        } else {
            $data['formulir'] = $this->Userdata->getformulir()->result();
            $data['calon_kader'] = $this->Userdata->get_all_calon_kader(); // Add this line
            
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('formulir/panel', $data);
            $this->load->view('template/panel_footer');
        }
    }

    public function artikel(){
        if ($this->session->userdata('login') != 'zpmlogin') {
            redirect('panel') ;
        }else{
            $data['artikel'] = $this->Userdata->getart()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('artikel/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function slide(){
        if ($this->session->userdata('login') != 'zpmlogin') {
            redirect('panel') ;
        }else{
            $data['slide'] = $this->Userdata->getslide()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('slide/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function galeri(){
        if ($this->session->userdata('login') != 'zpmlogin') {
            redirect('panel') ;
        }else{
            $data['galeri'] = $this->Userdata->getgal()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('galeri/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function user(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
            redirect('panel') ;
        }else{
            $data['user'] = $this->Userdata->getuserall()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('user/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function menu(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
            redirect('panel') ;
        }else{
            $data['menu'] = $this->Userdata->getmenu()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('menu/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

     // Fungsi cetak KTA
     public function cetak_kta($id) {
        if ($this->session->userdata('login') != 'zpmlogin') {
            redirect('Auth');
        } else {
            $data['anggota'] = $this->Userdata->get_anggota_by_id($id);
            $this->load->view('kta/cetak_kta', $data);
        }
    }
}