<?php
class Legalisasi extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_legalisasi');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_legalisasi->get_all_legalisasi();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('admin/v_legalisasi', $x);
	}

	function simpan_legalisasi() {
		$nomor_legalisasi = strip_tags($this->input->post('xnomor_legalisasi'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir')); 
		$jenis_kelamin = strip_tags($this->input->post('xjenis_kelamin'));
		$warganegara = strip_tags($this->input->post('xwarganegara'));
		$agama = strip_tags($this->input->post('xagama')); 
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_legalisasi->simpan_legalisasi($nomor_legalisasi, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $jenis_kelamin, $warganegara, $agama, $alamat);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/legalisasi');
	}

	function update_legalisasi() {
		$nomor_legalisasi = strip_tags($this->input->post('xnomor_legalisasi'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir')); 
		$jenis_kelamin = strip_tags($this->input->post('xjenis_kelamin'));
		$warganegara = strip_tags($this->input->post('xwarganegara'));
		$agama = strip_tags($this->input->post('xagama')); 
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_legalisasi->update_legalisasi($nomor_legalisasi, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $jenis_kelamin, $warganegara, $agama, $alamat);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/legalisasi');
	}
	function hapus_legalisasi() {
		$nomor_legalisasi = strip_tags($this->input->post('nomor_legalisasi'));
		$this->m_legalisasi->hapus_legalisasi($nomor_legalisasi);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/legalisasi');
	}

}
