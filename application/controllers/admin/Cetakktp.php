<?php
class Cetakktp extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_pengunjung');
	}
	function index() {
		if ($this->session->userdata('akses') == '1') {
			$data['pmnList'] = $this->m_ektp->get_all_ektp();
			$this->load->view('admin/v_cetakktp', $data);
		} else {
			redirect('administrator');
		}

	}

	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['pmbList'] = $this->m_ektp->get_all_ektp();

		$this->load->view('admin/v_cetakktp', $data);
		$paper_size = 'A4';
		$orientation = 'portrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan-ektp.pdf", array('Attachment' => 0));
	}
	

}
