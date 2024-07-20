<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserArtikel extends CI_Model {
	public function detailartik($link){
		$this->db->select('*');
        $this->db->from('p_artikel');
        $this->db->where('pa_link',$link);
        $data = $this->db->get();
        return $data;
	}
}