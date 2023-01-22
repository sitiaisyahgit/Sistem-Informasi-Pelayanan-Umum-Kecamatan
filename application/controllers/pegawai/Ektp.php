<?php
class Ektp extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Author');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_ektp');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_ektp->get_all_ektp();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('pegawai/v_ektp', $x);
	}

	function simpan_ektp() {
		$nomor_ktp = strip_tags($this->input->post('xnomor_ktp'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$agama = strip_tags($this->input->post('xagama'));
		$pekerjaan = strip_tags($this->input->post('xpekerjaan'));
		$status_perkawinan = strip_tags($this->input->post('xstatus_perkawinan'));
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_ektp->simpan_ektp($nomor_ktp, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $agama, $pekerjaan, $status_perkawinan, $alamat);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('pegawai/ektp');
	}

	function update_ektp() {
		$nomor_ktp = strip_tags($this->input->post('xnomor_ktp'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$jenkel = strip_tags($this->input->post('xjenkel'));
		$agama = strip_tags($this->input->post('xagama'));
		$pekerjaan = strip_tags($this->input->post('xpekerjaan'));
		$status_perkawinan = strip_tags($this->input->post('xstatus_perkawinan'));
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_ektp->update_ektp($nomor_ktp, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $agama, $pekerjaan, $status_perkawinan, $alamat);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('pegawai/ektp');
	}

	function hapus_ektp() {
		$nomor_ktp = strip_tags($this->input->post('nomor_ktp'));
		$this->m_ektp->hapus_ektp($nomor_ktp);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('pegawai/ektp');
	}
	function get_ektp_byid() {
		$nomor_ktp = strip_tags($this->input->post('xnomor_ktp'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$jenkel = strip_tags($this->input->post('xjenkel'));
		$agama = strip_tags($this->input->post('xagama'));
		$pekerjaan = strip_tags($this->input->post('xpekerjaan'));
		$status_perkawinan = strip_tags($this->input->post('xstatus_perkawinan'));
		$alamat = strip_tags($this->input->post('xalamat'));
		$this->m_ektp->get_ektp_byid($nomor_ktp, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $agama, $pekerjaan, $status_perkawinan, $alamat);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('pegawai/ektp');
	}

}
