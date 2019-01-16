<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rw extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mrw');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Rukun warga - Bubak Smart Dusun";
		$data['subtitle']	= "Data Rukun warga";
		$data['b1']				= "Master Data";
		$data['b1a']			= "#";
		$data['b2']				= "RW";
		$data['b2a']			= "#";
		$data['jumlah']			= 2;
		$data['master']		= "active";
		$data['rw']			= "active";
		$data['content']	= "data-rw";
		$data['data']		= $this->Mrw->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

}

/* End of file Rw.php */
/* Location: ./application/controllers/sysadmin/Rw.php */