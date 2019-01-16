<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rt extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mrt');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Rukun Tetangga - Bubak Smart Dusun";
		$data['subtitle']	= "Data Rukun Tetangga";
		$data['b1']				= "Master Data";
		$data['b1a']			= "#";
		$data['b2']				= "RT";
		$data['b2a']			= "#";
		$data['jumlah']			= 2;
		$data['master']		= "active";
		$data['rt']			= "active";
		$data['content']	= "data-rt";
		$data['data']		= $this->Mrt->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

}

/* End of file Rt.php */
/* Location: ./application/controllers/sysadmin/Rt.php */