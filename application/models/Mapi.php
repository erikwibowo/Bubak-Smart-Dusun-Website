<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapi extends CI_Model {

	public function getDanaKegiatan($id_kegiatan){
		$this->db->select('*, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 1 group by x.id_rt) as jml_rt1, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 2 group by x.id_rt) as jml_rt2, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 3 group by x.id_rt) as jml_rt3, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 4 group by x.id_rt) as jml_rt4');
		$this->db->join('tb_warga c', 'a.id_warga = c.id_warga', 'right');
		$this->db->join('tb_kegiatan b', 'a.id_kegiatan = b.id_kegiatan', 'right');
		$this->db->where('a.id_kegiatan', $id_kegiatan);
		$this->db->group_by('a.id_kegiatan');
		return $this->db->get('tb_penarikan_dana a');
	}

	public function wargaByRT($rt){
		$this->db->join('tb_rt b', 'a.id_rt = b.id_rt');
		$this->db->join('tb_rw c', 'b.id_rw = c.id_rw');
		$this->db->where('a.id_rt', $rt);
		return $this->db->get('tb_warga a');
	}

	public function rt(){
		return $this->db->get('tb_rt');
	}

	public function kegiatan(){
		return $this->db->get('tb_kegiatan');
	}

}

/* End of file Mapi.php */
/* Location: ./application/models/Mapi.php */