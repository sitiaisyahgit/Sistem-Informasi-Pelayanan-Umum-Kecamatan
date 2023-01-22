<?php
class Desnikah extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_desnikah');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_desnikah->get_all_desnikah();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('admin/v_desnikah', $x);
	}

	function simpan_desnikah() {
		$nomor_desnikah = strip_tags($this->input->post('xnomor_desnikah'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama_pria = strip_tags($this->input->post('xnama_pria'));
		$tempat_tl_pria = strip_tags($this->input->post('xtempat_tl_pria'));
		$tanggal_lahir_pria = strip_tags($this->input->post('xtanggal_lahir_pria')); 
		$jenis_kelamin_pria = strip_tags($this->input->post('xjenis_kelamin_pria'));
		$agama_pria = strip_tags($this->input->post('xagama_pria')); 
		$status_pria = strip_tags($this->input->post('xstatus_pria')); 
		$nama_pr = strip_tags($this->input->post('xnama_pr'));
		$tempat_tl_pr = strip_tags($this->input->post('xtempat_tl_pr'));
		$tanggal_lahir_pr = strip_tags($this->input->post('xtanggal_lahir_pr'));
		$jenis_kelamin_pr = strip_tags($this->input->post('xjenis_kelamin_pr'));
		$agama_pr = strip_tags($this->input->post('xagama_pr')); 
		$status_pr = strip_tags($this->input->post('xstatus_pr'));  
		$this->m_desnikah->simpan_desnikah($nomor_desnikah, $tanggal_buat, $nama_pria, $tempat_tl_pria, $tanggal_lahir_pria, $jenis_kelamin_pria, $agama_pria, $status_pria, $nama_pr, $tempat_tl_pr, $tanggal_lahir_pr, $jenis_kelamin_pr, $agama_pr, $status_pr);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/desnikah');
	}

	function update_desnikah() {
		$nomor_desnikah = strip_tags($this->input->post('xnomor_desnikah'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama_pria = strip_tags($this->input->post('xnama_pria'));
		$tempat_tl_pria = strip_tags($this->input->post('xtempat_tl_pria'));
		$tanggal_lahir_pria = strip_tags($this->input->post('xtanggal_lahir_pria'));
		 $jenis_kelamin_pria = strip_tags($this->input->post('xjenis_kelamin_pria'));
		$agama_pria = strip_tags($this->input->post('xagama_pria')); 
		$status_pria = strip_tags($this->input->post('xstatus_pria')); 
		$nama_pr = strip_tags($this->input->post('xnama_pr'));
		$tempat_tl_pr = strip_tags($this->input->post('xtempat_tl_pr'));
		$tanggal_lahir_pr = strip_tags($this->input->post('xtanggal_lahir_pr'));
		$jenis_kelamin_pr = strip_tags($this->input->post('xjenis_kelamin_pr'));
		$agama_pr = strip_tags($this->input->post('xagama_pr')); 
		$status_pr = strip_tags($this->input->post('xstatus_pr')); 
		$this->m_desnikah->update_desnikah($nomor_desnikah, $tanggal_buat, $nama_pria, $tempat_tl_pria, $tanggal_lahir_pria, $jenis_kelamin_pria, $agama_pria, $status_pria, $nama_pr, $tempat_tl_pr, $tanggal_lahir_pr, $jenis_kelamin_pr, $agama_pr, $status_pr);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/desnikah');
	}
	

}
