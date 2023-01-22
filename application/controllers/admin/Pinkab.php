<?php
class Pinkab extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_pinkab');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_pinkab->get_all_pinkab();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('admin/v_pinkab', $x);
	}

	function simpan_pinkab() {
		$nomor_pindahkab = strip_tags($this->input->post('xnomor_pindahkab'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$nama_kepala_kk = strip_tags($this->input->post('xnama_kepala_kk'));
		$alamat_sekarang = strip_tags($this->input->post('xalamat_sekarang'));
		$alamat_tujuan = strip_tags($this->input->post('xalamat_tujuan'));
		$jumlah_pindah = strip_tags($this->input->post('xjumlah_pindah'));
		$this->m_pinkab->simpan_pinkab($nomor_pindahkab, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/pinkab');
	}

	function update_pinkab() {
		$nomor_pindahkab = strip_tags($this->input->post('xnomor_pindahkab'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$nama_kepala_kk = strip_tags($this->input->post('xnama_kepala_kk'));
		$alamat_sekarang = strip_tags($this->input->post('xalamat_sekarang'));
		$alamat_tujuan = strip_tags($this->input->post('xalamat_tujuan'));
		$jumlah_pindah = strip_tags($this->input->post('xjumlah_pindah'));
		$this->m_pinkab->update_pinkab($nomor_pindahkab, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/pinkab');
	}
	function hapus_pinkab() {
		$nomor_pindahkab = strip_tags($this->input->post('nomor_pindahkab'));
		$this->m_pinkab->hapus_pinkab($nomor_pindahkab);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/pinkab');
	}

}
