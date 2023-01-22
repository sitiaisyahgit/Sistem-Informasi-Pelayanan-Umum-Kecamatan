<?php
class Sktm extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_sktm');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_sktm->get_all_sktm();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('admin/v_sktm', $x);
	}

	function simpan_sktm() {
		$nomor_sktm = strip_tags($this->input->post('xnomor_sktm'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$jenis_kelamin = strip_tags($this->input->post('xjenis_kelamin'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$warganegara = strip_tags($this->input->post('xwarganegara'));
		$agama = strip_tags($this->input->post('xagama'));
		$pekerjaan = strip_tags($this->input->post('xpekerjaan'));
		$status_perkawinan = strip_tags($this->input->post('xstatus_perkawinan'));
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_sktm->simpan_sktm($nomor_sktm, $tanggal_buat, $nama, $nik, $jenis_kelamin, $tempat_tl, $tanggal_lahir, $warganegara, $agama, $pekerjaan, $status_perkawinan, $alamat);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/sktm');
	}

	function update_sktm() {
		$nomor_sktm = strip_tags($this->input->post('xnomor_sktm'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$jenis_kelamin = strip_tags($this->input->post('xjenis_kelamin'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$warganegara = strip_tags($this->input->post('xwarganegara'));
		$agama = strip_tags($this->input->post('xagama'));
		$pekerjaan = strip_tags($this->input->post('xpekerjaan'));
		$status_perkawinan = strip_tags($this->input->post('xstatus_perkawinan'));
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_sktm->update_sktm($nomor_sktm, $tanggal_buat, $nama, $nik, $jenis_kelamin, $tempat_tl, $tanggal_lahir, $warganegara, $agama, $pekerjaan, $status_perkawinan, $alamat);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/sktm');
	}
	function hapus_sktm() {
		$nomor_sktm = strip_tags($this->input->post('nomor_sktm'));
		$this->m_sktm->hapus_sktm($nomor_sktm);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/sktm');
	}

}
