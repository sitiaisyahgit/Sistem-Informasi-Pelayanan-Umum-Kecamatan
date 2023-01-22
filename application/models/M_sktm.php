<?php
class M_sktm extends CI_Model {

	function get_all_sktm() {
		$hsl = $this->db->query("select * from tbsktm");
		return $hsl;
	}
	function simpan_sktm($nomor_sktm, $tanggal_buat, $nama, $nik, $jenis_kelamin, $tempat_tl, $tanggal_lahir, $warganegara, $agama, $pekerjaan, $status_perkawinan, $alamat) {
		$hsl = $this->db->query("insert into tbsktm(nomor_sktm,tanggal_buat,nama,nik,jenis_kelamin,tempat_tl,tanggal_lahir,warganegara,agama,pekerjaan,status_perkawinan,alamat) values('$nomor_sktm','$tanggal_buat','$nama', '$nik', '$jenis_kelamin', '$tempat_tl','$tanggal_lahir','$warganegara','$agama','$pekerjaan','$status_perkawinan','$alamat')");
		return $hsl;
	}
	function update_sktm($nomor_sktm, $tanggal_buat, $nama, $nik, $jenis_kelamin, $tempat_tl, $tanggal_lahir, $warganegara, $agama, $pekerjaan, $status_perkawinan, $alamat) {
		$hsl = $this->db->query("update tbsktm set tanggal_buat='$tanggal_buat', nama='$nama', nik='$nik', jenis_kelamin='$jenis_kelamin',  tempat_tl='$tempat_tl', tanggal_lahir='$tanggal_lahir', warganegara='$warganegara', agama='$agama', pekerjaan='$pekerjaan', status_perkawinan='$status_perkawinan', alamat='$alamat' where nomor_sktm='$nomor_sktm'");
		return $hsl;
	}
	function hapus_sktm($nomor_sktm) {
		$hsl = $this->db->query("delete from tbsktm where nomor_sktm='$nomor_sktm'");
		return $hsl;
	}

	function get_sktm_byid($buka_nomor_sktm) {
		$hsl = $this->db->query("select * from tbsktm where nomor_sktm='$nomor_sktm'");
		return $hsl;
	}

}