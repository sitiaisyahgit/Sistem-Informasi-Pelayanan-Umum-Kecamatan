<?php
class Kk extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Author');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_kk');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_kk->get_all_kk();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('pegawai/v_kk', $x);
	}

	function simpan_kk() {
		$nomor_kk = strip_tags($this->input->post('xnomor_kk'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$jenkel = strip_tags($this->input->post('xjenkel'));
		$agama = strip_tags($this->input->post('xagama'));
		$pekerjaan = strip_tags($this->input->post('xpekerjaan'));
		$status_perkawinan = strip_tags($this->input->post('xstatus_perkawinan'));
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_kk->simpan_kk($nomor_kk, $tanggal_buat, $nama, $no_kk, $nik, $tempat_tl, $tanggal_lahir, $jenkel, $agama, $pekerjaan, $status_perkawinan, $alamat);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('pegawai/kk');
	}

	function update_kk() {
		$nomor_kk = strip_tags($this->input->post('xnomor_kk'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$jenkel = strip_tags($this->input->post('xjenkel'));
		$agama = strip_tags($this->input->post('xagama'));
		$pekerjaan = strip_tags($this->input->post('xpekerjaan'));
		$status_perkawinan = strip_tags($this->input->post('xstatus_perkawinan'));
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_kk->update_kk($nomor_kk, $tanggal_buat, $nama, $no_kk, $nik, $tempat_tl, $tanggal_lahir, $jenkel, $agama, $pekerjaan, $status_perkawinan, $alamat);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('pegawai/kk');
	}
	function hapus_kk() {
		$nomor_kk = strip_tags($this->input->post('nomor_kk'));
		$this->m_kk->hapus_kk($nomor_kk);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('pegawai/kk');
	}

	function get_kk_byid() {
		$nomor_kk = strip_tags($this->input->post('xnomor_kk'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$jenkel = strip_tags($this->input->post('xjenkel'));
		$agama = strip_tags($this->input->post('xagama'));
		$pekerjaan = strip_tags($this->input->post('xpekerjaan'));
		$status_perkawinan = strip_tags($this->input->post('xstatus_perkawinan'));
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_kk->get_kk_byid($nomor_kk, $tanggal_buat, $nama, $no_kk, $nik, $tempat_tl, $tanggal_lahir, $jenkel, $agama, $pekerjaan, $status_perkawinan, $alamat);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('pegawai/kk');
	}
	

}
