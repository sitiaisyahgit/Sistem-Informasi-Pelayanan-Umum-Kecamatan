<?php
class Ahliwaris extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Author');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_ahliwaris');
		$this->load->library('upload');
	}

	function index() {
		$x['data'] = $this->m_ahliwaris->get_all_ahliwaris();
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('pegawai/v_ahliwaris', $x);
	}

	function simpan_ahliwaris() {
		$nomor_ahliwaris = strip_tags($this->input->post('xnomor_ahliwaris'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama_ahli_waris = strip_tags($this->input->post('xnama_ahli_waris')); 
		$tempat_tl_ah = strip_tags($this->input->post('xtempat_tl_ah'));
		$tanggal_lahir_ah = strip_tags($this->input->post('xtanggal_lahir_ah'));
		$jenis_kelamin_ah = strip_tags($this->input->post('xjenis_kelamin_ah')); 
		$agama_ah = strip_tags($this->input->post('xagama_ah'));
		$alamat_ah = strip_tags($this->input->post('xalamat_ah'));
		$nama_pewaris = strip_tags($this->input->post('xnama_pewaris')); 
		$tempat_tl_pw = strip_tags($this->input->post('xtempat_tl_pw'));
		$tanggal_lahir_pw = strip_tags($this->input->post('xtanggal_lahir_pw'));
		$jenis_kelamin_pw = strip_tags($this->input->post('xjenis_kelamin_pw')); 
		$agama_pw = strip_tags($this->input->post('xagama_pw'));
		$alamat_pw = strip_tags($this->input->post('xalamat_pw'));
		$this->m_ahliwaris->simpan_ahliwaris($nomor_ahliwaris, $tanggal_buat, $nama_ahli_waris, $tempat_tl_ah, $tanggal_lahir_ah, $jenis_kelamin_ah, $agama_ah, $alamat_ah, $nama_pewaris, $tempat_tl_pw, $tanggal_lahir_pw, $jenis_kelamin_pw, $agama_pw, $alamat_pw);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('pegawai/ahliwaris');
	}

	function update_ahliwaris() {
		$nomor_ahliwaris = strip_tags($this->input->post('xnomor_ahliwaris'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama_ahli_waris = strip_tags($this->input->post('xnama_ahli_waris')); 
		$tempat_tl_ah = strip_tags($this->input->post('xtempat_tl_ah'));
		$tanggal_lahir_ah = strip_tags($this->input->post('xtanggal_lahir_ah'));
		$jenis_kelamin_ah = strip_tags($this->input->post('xjenis_kelamin_ah'));
		$agama_ah = strip_tags($this->input->post('xagama_ah'));
		$alamat_ah = strip_tags($this->input->post('xalamat_ah'));
		$nama_pewaris = strip_tags($this->input->post('xnama_pewaris')); 
		$tempat_tl_pw = strip_tags($this->input->post('xtempat_tl_pw'));
		$tanggal_lahir_pw = strip_tags($this->input->post('xtanggal_lahir_pw'));
		$jenis_kelamin_pw = strip_tags($this->input->post('xjenis_kelamin_pw'));
		$agama_pw = strip_tags($this->input->post('xagama_pw'));
		$alamat_pw = strip_tags($this->input->post('xalamat_pw'));
		$this->m_ahliwaris->update_ahliwaris($nomor_ahliwaris, $tanggal_buat, $nama_ahli_waris, $tempat_tl_ah, $tanggal_lahir_ah, $jenis_kelamin_ah, $agama_ah, $alamat_ah, $nama_pewaris, $tempat_tl_pw, $tanggal_lahir_pw, $jenis_kelamin_pw, $agama_pw, $alamat_pw);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('pegawai/ahliwaris');
	}
	function hapus_ahliwaris() {
		$nomor_ahliwaris = strip_tags($this->input->post('nomor_ahliwaris'));
		$this->m_ahliwaris->hapus_ahliwaris($nomor_ahliwaris);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('pegawai/ahliwaris');
	}
	function get_ahliwaris_byid() {
		$nomor_ahliwaris = strip_tags($this->input->post('xnomor_ahliwaris'));
		$tanggal_buat = strip_tags($this->input->post('xtanggal_buat'));
		$nama_ahli_waris = strip_tags($this->input->post('xnama_ahli_waris')); 
		$tempat_tl_ah = strip_tags($this->input->post('xtempat_tl_ah'));
		$tanggal_lahir_ah = strip_tags($this->input->post('xtanggal_lahir_ah'));
		$jenis_kelamin_ah = strip_tags($this->input->post('xjenis_kelamin_ah'));
		$agama_ah = strip_tags($this->input->post('xagama_ah'));
		$alamat_ah = strip_tags($this->input->post('xalamat_ah'));
		$nama_pewaris = strip_tags($this->input->post('xnama_pewaris')); 
		$tempat_tl_pw = strip_tags($this->input->post('xtempat_tl_pw'));
		$tanggal_lahir_pw = strip_tags($this->input->post('xtanggal_lahir_pw'));
		$jenis_kelamin_pw = strip_tags($this->input->post('xjenis_kelamin_pw'));
		$agama_pw = strip_tags($this->input->post('xagama_pw'));
		$alamat_pw = strip_tags($this->input->post('xalamat_pw'));
		$this->m_ahliwaris->get_ahliwaris_byid($nomor_ahliwaris, $tanggal_buat, $nama_ahli_waris, $tempat_tl_ah, $tanggal_lahir_ah, $jenis_kelamin_ah, $agama_ah, $alamat_ah, $nama_pewaris, $tempat_tl_pw, $tanggal_lahir_pw, $jenis_kelamin_pw, $agama_pw, $alamat_pw);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('pegawai/ahliwaris');
	}

}
