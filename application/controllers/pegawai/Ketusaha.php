<?php
class Ketusaha extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Author');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_ketusaha');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_ketusaha->get_all_ketusaha();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('pegawai/v_ketusaha', $x);
	}

	function simpan_ketusaha() {
		$nomor_ketusaha = strip_tags($this->input->post('xnomor_ketusaha'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$jenis_kelamin = strip_tags($this->input->post('xjenis_kelamin')); 
		$alamat = strip_tags($this->input->post('xalamat'));
		$id = strip_tags($this->input->post('xid'));
		$this->m_ketusaha->simpan_ketusaha($nomor_ketusaha, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $jenis_kelamin, $alamat, $id);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('pegawai/ketusaha');
	}

	function update_ketusaha() {
		$nomor_ketusaha = strip_tags($this->input->post('xnomor_ketusaha'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$jenis_kelamin = strip_tags($this->input->post('xjenis_kelamin')); 
		$alamat = strip_tags($this->input->post('xalamat'));
		$id = strip_tags($this->input->post('xid'));
		$this->m_ketusaha->update_ketusaha($nomor_ketusaha, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $jenis_kelamin, $alamat, $id);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('pegawai/ketusaha');
	}
	function hapus_ketusaha() {
		$nomor_ketusaha = strip_tags($this->input->post('nomor_ketusaha'));
		$this->m_ketusaha->hapus_ketusaha($nomor_ketusaha);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('pegawai/ketusaha');
	}
	function get_ketusaha_byid() {
		$nomor_ketusaha = strip_tags($this->input->post('xnomor_ketusaha'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama = strip_tags($this->input->post('xnama'));
		$nik = strip_tags($this->input->post('xnik'));
		$tempat_tl = strip_tags($this->input->post('xtempat_tl'));
		$tanggal_lahir = strip_tags($this->input->post('xtanggal_lahir'));
		$jenis_kelamin = strip_tags($this->input->post('xjenis_kelamin')); 
		$alamat = strip_tags($this->input->post('xalamat'));
		$id = strip_tags($this->input->post('xid'));
		$this->m_ketusaha->get_ketusaha_byid($nomor_ketusaha, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $jenis_kelamin, $alamat, $id);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('pegawai/ketusaha');
	}


}
