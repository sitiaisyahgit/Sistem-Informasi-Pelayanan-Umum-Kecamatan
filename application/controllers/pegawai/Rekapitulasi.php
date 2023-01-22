<?php
class Rekapitulasi extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Author');
			redirect($url);
		};
		$this->load->model('m_identitas');
		$this->load->model('m_rekapitulasi');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
		$this->load->helper('download');
	}

	function index() {
		$x['iden'] = $this->m_identitas->get_all_identitas();
		$x['data'] = $this->m_rekapitulasi->get_all_rekapitulasi();
		$this->load->view('pegawai/v_rekapitulasi', $x);
	}

	function download() {
		$id = $this->uri->segment(4);
		$get_db = $this->m_rekapitulasi->get_file_byid($id);
		$q = $get_db->row_array();
		$file = $q['data'];
		$path = './assets/files/' . $file;
		$data = file_get_contents($path);
		$name = $file;

		force_download($name, $data);
		redirect('pegawai/rekapitulasi');
	}

	function simpan_file() {
		$config['upload_path'] = './assets/files/'; //path folder
		$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip|xlsx|xls'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$file = $gbr['file_name'];
				$judul = strip_tags($this->input->post('xjudul'));
				$deskripsi = $this->input->post('xdeskripsi');
				$oleh = strip_tags($this->input->post('xoleh'));

				$this->m_rekapitulasi->simpan_file($judul, $deskripsi, $oleh, $file);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('pegawai/rekapitulasi');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('pegawai/rekapitulasi');
			}

		} else {
			redirect('pegawai/rekapitulasi');
		}

	}

	function update_file() {

		$config['upload_path'] = './assets/files/'; //path folder
		$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip|xlsx|xls'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$file = $gbr['file_name'];
				$kode = $this->input->post('kode');
				$judul = strip_tags($this->input->post('xjudul'));
				$deskripsi = $this->input->post('xdeskripsi');
				$oleh = strip_tags($this->input->post('xoleh'));
				$data = $this->input->post('file');
				$path = './assets/files/' . $data;
				unlink($path);
				$this->m_rekapitulasi->update_file($kode, $judul, $deskripsi, $oleh, $file);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('pegawai/rekapitulasi');

			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('pegawai/rekapitulasi');
			}

		} else {
			$kode = $this->input->post('kode');
			$judul = strip_tags($this->input->post('xjudul'));
			$deskripsi = $this->input->post('xdeskripsi');
			$oleh = strip_tags($this->input->post('xoleh'));
			$this->m_rekapitulasi->update_file_tanpa_file($kode, $judul, $deskripsi, $oleh);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('pegawai/rekapitulasi');
		}

	}

	function hapus_file() {
		$kode = $this->input->post('kode');
		$data = $this->input->post('file');
		$path = './assets/files/' . $data;
		unlink($path);
		$this->m_rekapitulasi->hapus_file($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('pegawai/rekapitulasi');
	}

}
