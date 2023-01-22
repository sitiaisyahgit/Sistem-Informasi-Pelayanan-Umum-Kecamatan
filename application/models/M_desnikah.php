<?php
class M_desnikah extends CI_Model {

	function get_all_desnikah() {
		$hsl = $this->db->query("select * from tbdesnikah");
		return $hsl;
	}
	function simpan_desnikah($nomor_desnikah, $tanggal_buat, $nama_pria, $tempat_tl_pria, $tanggal_lahir_pria, $jenis_kelamin_pria, $agama_pria, $status_pria, $nama_pr, $tempat_tl_pr, $tanggal_lahir_pr, $jenis_kelamin_pr, $agama_pr, $status_pr) {
		$hsl = $this->db->query("insert into tbdesnikah(nomor_desnikah,tanggal_buat,nama_pria,tempat_tl_pria,tanggal_lahir_pria,jenis_kelamin_pria,agama_pria,status_pria,nama_pr,tempat_tl_pr,tanggal_lahir_pr,jenis_kelamin_pr,agama_pr,status_pr) values ('$nomor_desnikah','$tanggal_buat','$nama_pria','$tempat_tl_pria','$tanggal_lahir_pria','$jenis_kelamin_pria','$agama_pria','$status_pria','$nama_pr','$tempat_tl_pr','$tanggal_lahir_pr','$jenis_kelamin_pr','$agama_pr','$status_pr')");
		return $hsl;
	}
	function update_desnikah($nomor_desnikah, $tanggal_buat, $nama_pria, $tempat_tl_pria, $tanggal_lahir_pria, $jenis_kelamin_pria, $agama_pria, $status_pria, $nama_pr, $tempat_tl_pr, $tanggal_lahir_pr, $jenis_kelamin_pr, $agama_pr,  $status_pr) {
		$hsl = $this->db->query("update tbdesnikah set tanggal_buat='$tanggal_buat', nama_pria='$nama_pria', tempat_tl_pria='$tempat_tl_pria', tanggal_lahir_pria='$tanggal_lahir_pria',  jenis_kelamin_pria='$jenis_kelamin_pria', agama_pria='$agama_pria', status_pria='$status_pria', nama_pr='$nama_pr', tempat_tl_pr='$tempat_tl_pr', tanggal_lahir_pr='$tanggal_lahir_pr',  jenis_kelamin_pr='$jenis_kelamin_pr', agama_pr='$agama_pr', status_pr='$status_pr' where nomor_desnikah='$nomor_desnikah'");
		return $hsl;
	}


	function get_desnikah_byid($buka_nomor_nk) {
		$hsl = $this->db->query("select * from tbnikah where nomor_desnikah='$nomor_desnikah'");
		return $hsl;
	}

}