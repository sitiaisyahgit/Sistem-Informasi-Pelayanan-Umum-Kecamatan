<?php
class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_identitas');

	}
	function index() {

		$x['iden'] = $this->m_identitas->get_all_identitas();
		$this->load->view('admin/v_login', $x);
	}
	function auth() {
		$username = strip_tags(str_replace("'", "", $this->input->post('username')));
		$password = strip_tags(str_replace("'", "", $this->input->post('password')));
		$u = $username;
		$p = $password;
		$cadmin = $this->m_login->cekadmin($u, $p);
		// echo json_encode($cadmin);
		if ($cadmin->num_rows() > 0) {
			$this->session->set_userdata('masuk', true);
			$this->session->set_userdata('user', $u);
// 			$this->session->set_userdata('file_manager', true);

			$xcadmin = $cadmin->row_array();
			if ($xcadmin['level'] == '1') {
				$this->session->set_userdata('akses', '1');
				$idadmin = $xcadmin['id'];
				$user_nama = $xcadmin['nama'];
				$this->session->set_userdata('idadmin', $idadmin);
				$this->session->set_userdata('nama', $user_nama);
				// $this->session->set_userdata('file_manager', true);
				redirect('admin/dashboard');
			} else if($xcadmin['level'] == '2') {
				$this->session->set_userdata('akses', '2');
				$idadmin = $xcadmin['id'];
				$user_nama = $xcadmin['nama'];
				$this->session->set_userdata('idadmin', $idadmin);
				$this->session->set_userdata('nama', $user_nama);
				// $this->session->set_userdata('file_manager', true);

				redirect('pegawai/dashboard');
			} else {
				$this->session->set_userdata('akses', '3');
				$idadmin = $xcadmin['id'];
				$user_nama = $xcadmin['nama'];
				$this->session->set_userdata('idadmin', $idadmin);
				$this->session->set_userdata('nama', $user_nama);
				// $this->session->set_userdata('file_manager', true);

				redirect('kepsek/dashboard');
			}

		} else {
			echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
			redirect('admin/login');
		}

	}

	function logout() {
		$this->session->sess_destroy();
		$this->session->unset_userdata('file_manager');
		redirect('admin/login');
	}
}
