<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$data['title']		= "Dashboard - Bubak Smart Dusun";
		$data['subtitle']	= "Dashboard";
		$data['dashboard']	= "active";
		$data['content']	= "dashboard";

		$this->load->view('sysadmin/index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/sysadmin/Dashboard.php */