<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkegiatan extends CI_Model {

	public function read(){
		return $this->db->get('tb_kegiatan');
	}

}

/* End of file Mkegiatan.php */
/* Location: ./application/models/Mkegiatan.php */