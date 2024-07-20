<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserData extends CI_Model {

	public function getgaleri(){
		$this->db->select('*');
		$this->db->from('p_galeri');
		$this->db->order_by('pfotoid','DESC');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query;
	}

	public function getsetting(){
        $data = $this->db->get('setting');
        return $data;
	}

	public function getartikel(){
        $this->db->select('*');
        $this->db->from('p_artikel');
        $this->db->order_by('partikelid','DESC');
        $this->db->limit(4);
        $data = $this->db->get();
        return $data;
	}

	public function getallartikel(){
		$this->db->select('*');
        $this->db->from('p_artikel');
        $this->db->order_by('partikelid','DESC');
        $data = $this->db->get();
        return $data;
	}
	
	public function getkegiatan(){
		$data = $this->db->get('p_kegiatan');
        return $data;
	}

	public function getgaleri_kegiatan(){
		$data = $this->db->get('galeri_kegiatan');
        return $data;
	}

	public function getprofil(){
		$data = $this->db->get('p_about');
        return $data;
	}

	// module untuk menu setting
	public function settingupdate($where,$data){
        $this->db->where($where);
        $this->db->update('setting',$data);
        return;
    }
	// batas akhir menu setting

	// module untuk menu galeri kegiatan
	public function galerikegiatanupdate($where,$data){
        $this->db->where($where);
        $this->db->update('galeri_kegiatan',$data);
        return;
    }
	// batas akhor menu galeri kegiatan

	// module untuk menu kegiatan
	public function kegiatanupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_kegiatan',$data);
        return;
    }
	// batas akhir module kegiatan

	// module untuk menu about 
	public function aboutupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_about',$data);
        return;
    }
	// batas akhir module about

	// module untuk menu kontak
	public function kontakadd($data){
    	$this->nama = $data['nama'];
    	$this->email = $data['email'];
    	$this->pesan = $data['pesan'];
    	$this->db->insert('kontak', $this);
    	return;
    }

    public function getformulir(){
		$data = $this->db->get('calon_kader');
        return $data;
	}

	public function hapuskontak($id){
        $this->db->where('id_kontak',$id);
        $this->db->delete('kontak');
       return;
    }
	// batas akhir menu kontak

    // module menu artikel
    public function getart(){
        $this->db->select('*');
        $this->db->from('p_artikel');
        $data = $this->db->get();
        return $data;
    }

    public function addartikel($data){
    	$this->pa_judul = $data['judul'];
		$this->pa_penulis = $data['penulis'];
		$this->pa_file = $data['logo'];
		$this->pa_isi = $data['isi'];
		$this->pa_tgl = $data['tgl'];
		$this->pa_link = $data['url'];
    	$this->db->insert('p_artikel', $this);
    	return;
    }

    public function hapusartikel($id){
        $this->db->where('partikelid',$id);
        $this->db->delete('p_artikel');
       return;
    }

    public function artikeledit($id){
    	$this->db->where('partikelid', $id); 
        $result = $this->db->get('p_artikel')->row(); 
        return $result;
    }

    public function artikelupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_artikel',$data);
        return;
    }
    // batas akhir module artikel

    // module galeri
    public function getgal(){
        $data = $this->db->get('p_galeri');
        return $data;
    }
    public function addgaleri($data){
    	$this->pf_judul = $data['pf_judul'];
		$this->pf_ket = $data['pf_ket'];
		$this->pf_file = $data['pf_file'];
		$this->pf_tanggal = $data['pf_tanggal'];
		$this->pfuserid = $data['pfuserid'];
    	$this->db->insert('p_galeri', $this);
    	return;
    }

    public function hapusgaleri($id){
        $this->db->where('pfotoid',$id);
        $this->db->delete('p_galeri');
       return;
    }

    public function galeriedit($id){
    	$this->db->where('pfotoid', $id); 
        $result = $this->db->get('p_galeri')->row(); 
        return $result;
    }

    public function galeriupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_galeri',$data);
        return;
    }
    // batas akhir module galeri

    // module menu user 
    public function getuserall(){
		$data = $this->db->get('p_user');
        return $data;
	}

	public function adduser($data){
		$this->username = $data['username'];
		$this->role = $data['role'];
		$this->password = $data['password'];
    	$this->db->insert('p_user', $this);
    	return;
    }

    public function hapususer($id){
        $this->db->where('id_user',$id);
        $this->db->delete('p_user');
       return;
    }

    public function useredit($id){
    	$this->db->where('id_user', $id); 
        $result = $this->db->get('p_user')->row(); 
        return $result;
    }

    public function userupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_user',$data);
        return;
    }
    public function add_user($data)
    {
        $this->username = $data['username'];
        $this->password = password_hash($data['password'], PASSWORD_DEFAULT); // Enkripsi kata sandi
        $this->role = 'user'; // Atur peran pengguna default
        $this->db->insert('p_regis', $this);
        return;
    }
    
    // batas akhir module menu user

    public function add_calon_kader($data) {
        return $this->db->insert('calon_kader', $data);
    }

    public function get_all_calon_kader() {
        $query = $this->db->get('calon_kader');
        return $query->result_array();
    }

    public function get_kta_by_id($id) {
        $query = $this->db->get_where('calon_kader', array('id' => $id));
        return $query->row_array();
    }
   
    public function add_user_anggota($data)
    {
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->password = password_hash($data['password'], PASSWORD_DEFAULT); // Encrypt the password
        $this->db->insert('p_regis', $this);
        return $this->db->insert_id();
    }

    public function get_user($username)
    {
        return $this->db->get_where('p_regis', ['username' => $username])->row_array();
    }
    
    public function get_data_by_id($id_anggota)
    {
        // Write the SQL query using CodeIgniter's query builder
        $this->db->select('
            p.id_anggota,
            p.username,
            p.email AS p_email,
            p.password,
            c.id_calon,
            c.nama,
            c.tempat_lahir,
            c.tgl_lahir,
            c.jenis_kelamin,
            c.alamat,
            c.no_hp,
            c.email AS c_email,
            c.foto
        ');
        $this->db->from('p_regis p');
        $this->db->join('calon_kader c', 'p.id_anggota = c.id_anggota', 'left'); // Use 'left' for LEFT JOIN
        $this->db->where('p.id_anggota', $id_anggota);
        
        // Execute the query
        $query = $this->db->get();

        // Return the result as an array
        return $query->result_array();
    }

    public function update_calon_kader($id_anggota, $data) {
        $this->db->where('id_anggota', $id_anggota);
        return $this->db->update('calon_kader', $data);
    }

    public function get_calon_kader_by_id_anggota($id_anggota) {
        $this->db->where('id_anggota', $id_anggota);
        return $this->db->get('calon_kader')->row_array();
    }

    public function get_anggota_by_id($id) {
        $this->db->where('id_calon', $id);
        return $this->db->get('calon_kader')->row_array();
    }
}