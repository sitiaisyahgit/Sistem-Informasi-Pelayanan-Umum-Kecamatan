<?php
class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Author');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_pengunjung');
		$this->load->model('m_pengunjungkk');
		$this->load->model('m_pengunjungdes');
	}
	function index() {
		if ($this->session->userdata('akses') == '2') {
			$x['iden'] = $this->m_identitas->get_all_identitas();
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['visitorkk'] = $this->m_pengunjungkk->statistik_pengujungkk();
			$x['visitordes'] = $this->m_pengunjungdes->statistik_pengujungdes();
			$this->load->view('pegawai/v_dashboard', $x);
		} else {
			redirect('pegawai/v_dashboard');
		}

	}
	// public function get_unread_message($count) {
	// 	$data = $this->m_pengunjung->where()->num_rows();
	// 	echo json_encode($data);
	// }

}