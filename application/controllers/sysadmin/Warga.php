<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Warga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mwarga");

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Warga - Bubak Smart Dusun";
		$data['subtitle']	= "Data Warga";
		$data['b1']			= "Master Data";
		$data['b1a']		= "#";
		$data['b2']			= "Warga";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['master']		= "active";
		$data['rt']			= "active";
		$data['content']	= "data-warga";
		$data['data']		= $this->Mwarga->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert_batch(){
		$warga = array ("Casmudi", "Rahim", "Nurohman", "Edi Purnomo", "Oyot Suyoto", "Ade Saputra", "Dul Jalil", "Darlan", "Abdul Aziz", "Subeni", "Casmidi", "Sugeng", "Sakur", "Rudiyanto", "Basuki", "Bowo", "Romadhon", "Sobirin", "Casmadi", "Tahuri", "Kholidin", "Dopar", "Darli", "Jono", "Utarsih", "Kastari", "Saroh", "Nurwasis", "H. Kadri", "Slamet", "Supar", "Samai", "Casbani", "Salban", "Tuti", "Taryan", "Agus", "Giri", "Roib", "Nardi", "Rojah", "Muhayat", "Basori", "Rahmat", "Wanuri", "Suprirman", "Parno", "Sukadi", "Ruminah", "Diyo", "Risah", "Nanang", "Cawil", "Kaman", "Iyah", "Kasiroh", "Olidah", "Imam", "Suryadi", "Kasdono", "Sukirno", "Tasum", "Purwanto", "Rusnoto", "Sion", "Teguh", "Raadi", "Rasdan", "Rasidi");
		$warga1 = array("Tarmono", "Ramisah", "Jamin", "Wasirun", "Suwono", "Toyo", "Kis", "Nursito", "Tarman", "Dasari", "Saroni", "Anwar", "Wirjo", "Naim", "Tarban", "Amad", "Usuf", "Marinti", "Sirun", "Trimo", "Hadi", "Bodong", "Rasmani", "Dul Slamet", "Kasdani", "Komari", "Sibun", "Sikus", "Dasmulyo", "Tarmini", "Sri’ah", "Damiri", "Rasmono", "Mu’in", "Juwadi", "Jadi", "Bejo", "Eko", "Tus", "Mus", "Sandriyo", "Cayani", "Kesrag", "Nasoha", "Rejo", "Jaenal", "Rahuti", "Tutur");
		$warga2 = array("Casminten", "Kasdik", "Anton", "Warso", "Samad", "Rusdanto", "Rustamto", "Muktar", "Kambali", "H. Tobiin", "Anas", "Sri Utami", "Riyanah", "Alinah", "Paroji", "Samudi", "Surono", "Rumaenis", "Hj. Supiyah", "H. Tarono", "Kasturah", "Sahuri", "Atip", "Dasupi", "Umarni", "Kutinah", "Sodikin", "Kunipah", "Durahman", "Bunyamin", "Printis", "Casmuri", "Kardini", "Teguh", "Kardono", "Suryadi", "Suprapto", "Darminto", "Karsiti", "Sri Marni", "Sindung", "Tambak", "Suparti", "Surijo", "Nursalam", "Martanto", "Putut", "Rundiyah", "Basari", "Kasmari", "Sukasbu", "Munarto", "Sarwo", "Nursari");
		// for ($i=0; $i < count($warga2); $i++) { 
		// 	$dtwarga = array(
		// 		"nama_lengkap"	=> $warga2[$i],
		// 		"id_rt"			=> 3
		// 	);
		// 	$this->Mwarga->insert($dtwarga);
		// }
	}

}

/* End of file Warga.php */
/* Location: ./application/controllers/sysadmin/Warga.php */