<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrw extends CI_Model {

	public function read(){
		return $this->db->get('tb_rw');
	}	

}

/* End of file Mrw.php */
/* Location: ./application/models/Mrw.php */