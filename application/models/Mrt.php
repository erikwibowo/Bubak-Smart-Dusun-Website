<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrt extends CI_Model {

	public function read(){
		return $this->db->get('tb_rt');
	}

}

/* End of file Mrt.php */
/* Location: ./application/models/Mrt.php */