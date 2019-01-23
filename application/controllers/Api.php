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

	public function kegiatan(){
		$data = $this->Mapi->kegiatan()->result();
		$arr = array();
		$arra = array();

		foreach ($data as $key) {
			$arra['id_kegiatan']	= $key->id_kegiatan;
			$arra['nama_kegiatan']	= $key->nama_kegiatan;
			$arra['anggaran']		= rp($key->anggaran);
			$arra['iuran']			= rp($key->iuran);
			$arra['mulai']			= date_indo(date("Y-m-d", strtotime($key->mulai)));
			$arra['selesai']		= date_indo(date("Y-m-d", strtotime($key->selesai)));
			array_push($arr, $arra);
		}

		echo json_encode($arr);
	}

	public function penarikan_dana($id_kegiatan){
		$data = $this->Mapi->getDanaKegiatan($id_kegiatan)->result();
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



	public function berita(){
		$data = $this->Mapi->berita()->result();
		$arr = array();
		$arra = array();

		foreach ($data as $key) {
			$arra['id_berita']		= $key->id_berita;
			$arra['judul_berita']	= $key->judul_berita;
			$arra['foto_berita']	= $key->foto_berita;
			$arra['isi_berita']		= $key->isi_berita;
			$arra['oleh']			= $key->oleh;
			$arra['dibuat']			= date_indo(date("Y-m-d", strtotime($key->dibuat)));
			array_push($arr, $arra);
		}

		echo json_encode($arr);
	}


	public function slider(){
		$data = $this->Mapi->slider()->result();
		$arr = array();
		$arra = array();

		foreach ($data as $key) {
			$arra['foto_slider']	= $key->foto_slider;
			$arra['caption']		= $key->caption;
			array_push($arr, $arra);
		}

		echo json_encode($arr);
	}

	public function telepon(){
		$data = $this->Mapi->telepon()->result();
		$arr = array();
		$arra = array();

		foreach ($data as $key) {
			$arra['nama_telepon']	= $key->nama_telepon;
			$arra['nomor_telepon']		= $key->nomor_telepon;
			array_push($arr, $arra);
		}

		echo json_encode($arr);
	}

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */