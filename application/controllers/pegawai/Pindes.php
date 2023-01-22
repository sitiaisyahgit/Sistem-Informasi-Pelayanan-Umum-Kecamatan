<?php
class Pindes extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Author');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_pindes');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_pindes->get_all_pindes();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('pegawai/v_pindes', $x);
	}

	function simpan_pindes() {
		$nomor_pindahdes = strip_tags($this->input->post('xnomor_pindahdes'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$nama_kepala_kk = strip_tags($this->input->post('xnama_kepala_kk'));
		$alamat_sekarang = strip_tags($this->input->post('xalamat_sekarang'));
		$alamat_tujuan = strip_tags($this->input->post('xalamat_tujuan'));
		$jumlah_pindah = strip_tags($this->input->post('xjumlah_pindah'));
		$this->m_pindes->simpan_pindes($nomor_pindahdes, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('pegawai/pindes');
	}

	function update_pindes() {
		$nomor_pindahdes = strip_tags($this->input->post('xnomor_pindahdes'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$nama_kepala_kk = strip_tags($this->input->post('xnama_kepala_kk'));
		$alamat_sekarang = strip_tags($this->input->post('xalamat_sekarang'));
		$alamat_tujuan = strip_tags($this->input->post('xalamat_tujuan'));
		$jumlah_pindah = strip_tags($this->input->post('xjumlah_pindah'));
		$this->m_pindes->update_pindes($nomor_pindahdes, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('pegawai/pindes');
	}
	function hapus_pindes() {
		$nomor = strip_tags($this->input->post('nomor'));
		$this->m_pindes->hapus_pindes($nomor);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('pegawai/pindes');
	}
	function get_pindes_byid() {
		$nomor_pindahdes = strip_tags($this->input->post('xnomor_pindahdes'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$no_kk = strip_tags($this->input->post('xno_kk'));
		$nik = strip_tags($this->input->post('xnik'));
		$nama_kepala_kk = strip_tags($this->input->post('xnama_kepala_kk'));
		$alamat_sekarang = strip_tags($this->input->post('xalamat_sekarang'));
		$alamat_tujuan = strip_tags($this->input->post('xalamat_tujuan'));
		$jumlah_pindah = strip_tags($this->input->post('xjumlah_pindah'));
		$this->m_pindes->get_pindes_byid($nomor_pindahdes, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('pegawai/pindes');
	}

}
