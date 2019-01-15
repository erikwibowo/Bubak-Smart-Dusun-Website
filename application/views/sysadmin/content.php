<?php
	if ($content == "dashboard"){
		$this->load->view('sysadmin/dashboard');
	}elseif ($content == "data-rt"){
		$this->load->view('sysadmin/tabel');
	}elseif ($content == "data-rw"){
		$this->load->view('sysadmin/tabel');
	}
?>