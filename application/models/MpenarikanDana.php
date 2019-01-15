<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MpenarikanDana extends CI_Model {

	public function readByKegiatan(){
		$this->db->select('*, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 1 group by x.id_rt) as jml_rt1, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 2 group by x.id_rt) as jml_rt2, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 3 group by x.id_rt) as jml_rt3, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 4 group by x.id_rt) as jml_rt4');
		$this->db->join('tb_warga c', 'a.id_warga = c.id_warga', 'right');
		$this->db->join('tb_kegiatan b', 'a.id_kegiatan = b.id_kegiatan', 'right');
		$this->db->group_by('a.id_kegiatan');
		return $this->db->get('tb_penarikan_dana a');
	}

	public function insert($data){
		return $this->db->insert('tb_penarikan_dana', $data);
	}

	public function update($data, $id_warga){
		$this->db->where('id_warga', $id_warga);
		return $this->db->update('tb_penarikan_dana', $data);
	}

}

/* End of file MpenarikanDana.php */
/* Location: ./application/models/MpenarikanDana.php */