<?php
class Infouser extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Author');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_pengunjung');
	}
	function index() {
		if ($this->session->userdata('akses') == '2') {
			$x['iden'] = $this->m_identitas->get_all_identitas();
			$this->load->view('pegawai/v_infouser', $x);
		} else {
			redirect('pegawai/v_infouser');
		}

	}
	// public function get_unread_message($count) {
	// 	$data = $this->m_pengunjung->where()->num_rows();
	// 	echo json_encode($data);
	// }

}