<?php
class Cetaksurat extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Author');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_cetak');
		$this->load->library('upload');
	}

	function index() {
		$nomor_ketusaha = $this->uri->segment(3);
		$x['data'] = $this->m_cetak->get_ketusaha_byid();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('pegawai/cetaksurat', $x);
	}



	

}
