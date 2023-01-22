<?php
class Pinkec extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_pinkec');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_pinkec->get_all_pinkec();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('admin/v_pinkec', $x);
	}

	function simpan_pinkec() {
		$nomor_pindah = strip_tags($this->input->post('xnomor_pindah'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$nama_kepala_kk = strip_tags($this->input->post('xnama_kepala_kk'));
		$alamat_sekarang = strip_tags($this->input->post('xalamat_sekarang'));
		$alamat_tujuan = strip_tags($this->input->post('xalamat_tujuan'));
		$jumlah_pindah = strip_tags($this->input->post('xjumlah_pindah'));
		$this->m_pinkec->simpan_pinkec($nomor_pindah, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/pinkec');
	}

	function update_pinkec() {
		$nomor_pindah = strip_tags($this->input->post('nomor_pindah'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$nama_kepala_kk = strip_tags($this->input->post('xnama_kepala_kk'));
		$alamat_sekarang = strip_tags($this->input->post('xalamat_sekarang'));
		$alamat_tujuan = strip_tags($this->input->post('xalamat_tujuan'));
		$jumlah_pindah = strip_tags($this->input->post('xjumlah_pindah'));
		$this->m_pinkec->update_pinkec($nomor_pindah, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/pinkec');
	}
	function hapus_pinkec() {
		$nomor_pindah = strip_tags($this->input->post('nomor_pindah'));
		$this->m_pinkec->hapus_pinkec($nomor_pindah);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/pinkec');
	}

}
