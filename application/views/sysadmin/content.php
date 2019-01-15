<?php
	if ($content == "dashboard"){
		$this->load->view('sysadmin/dashboard');
	}elseif ($content == "data-rt"){
		$this->load->view('sysadmin/tabel');
	}elseif ($content == "data-rw"){
		$this->load->view('sysadmin/tabel');
	}elseif ($content == "data-warga"){
		$this->load->view('sysadmin/tabel');
	}elseif ($content == "data-kegiatan"){
		$this->load->view('sysadmin/tabel');
	}elseif ($content == "data-penarikan-dana"){
		$this->load->view('sysadmin/tabel');
	}elseif ($content == "input-penarikan-dana"){
		$this->load->view('sysadmin/tabel');
	}
?>