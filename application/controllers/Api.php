<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mapi');
	}

	public function rt(){
		$data = $this->Mapi->rt()->result();
		$arr = array();
		$arra = array();

		foreach ($data as $key) {
			$arra['id_rt']	= $key->id_rt;
			$arra['rt']		= $key->rt;
			$arra['ketua_rt']		= $key->ketua_rt;
			array_push($arr, $arra);
		}

		echo json_encode($arr);
	}

	public function warga($id_rt){
		$data = $this->Mapi->wargaByRt($id_rt)->result();
		$arr = array();
		$arra = array();

		foreach ($data as $key) {
			$arra['nama_lengkap_warga']	= $key->nama_lengkap_warga;
			$arra['rt']					= $key->rt;
			array_push($arr, $arra);
		}

		echo json_encode($arr);
	}

	public function penarikan_dana(){
		$data = $this->Mapi->getDanaPengajian()->result();
		$arr = array();
		$arra = array();

		foreach ($data as $key) {
			$total = $key->jml_rt1+$key->jml_rt2+$key->jml_rt3+$key->jml_rt4;

			$arra['nama_kegiatan']	= $key->nama_kegiatan;
			$arra['anggaran']		= rp($key->anggaran);
			$arra['iuran']			= rp($key->iuran);
			$arra['mulai']			= date_indo(date("Y-m-d", strtotime($key->mulai)));
			$arra['selesai']		= date_indo(date("Y-m-d", strtotime($key->selesai)));
			$arra['rt1']			= rp($key->jml_rt1);
			$arra['rt2']			= rp($key->jml_rt2);
			$arra['rt3']			= rp($key->jml_rt3);
			$arra['rt4']			= rp($key->jml_rt4);
			$arra['total']			= rp($total);
			$arra['persen']			= round($total/$key->anggaran*100, 2)."%";
			array_push($arr, $arra);
		}

		echo json_encode($arr);
	}

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */