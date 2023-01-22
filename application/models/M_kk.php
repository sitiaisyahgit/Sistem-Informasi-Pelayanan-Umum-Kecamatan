<?php
class M_kk extends CI_Model {

	function get_all_kk() {
		$hsl = $this->db->query("select * from tbkk");
		return $hsl;
	}
	function simpan_kk($nomor_kk, $tanggal_buat, $nama, $no_kk, $nik, $tempat_tl, $tanggal_lahir, $jenkel, $agama, $pekerjaan, $status_perkawinan, $alamat) {
		$hsl = $this->db->query("insert into tbkk(nomor_kk,tanggal_buat,nama,no_kk,nik,tempat_tl,tanggal_lahir,jenkel,agama,pekerjaan,status_perkawinan,alamat) values('$nomor_kk','$tanggal_buat','$nama','$no_kk', '$nik','$tempat_tl','$tanggal_lahir','$jenkel','$agama','$pekerjaan','$status_perkawinan','$alamat')");
		return $hsl;
	}
	function update_kk($nomor_kk, $tanggal_buat, $nama, $no_kk, $nik, $tempat_tl, $tanggal_lahir, $jenkel, $agama, $pekerjaan, $status_perkawinan, $alamat) {
		$hsl = $this->db->query("update tbkk set tanggal_buat='$tanggal_buat', nama='$nama', no_kk='$no_kk', nik='$nik', tempat_tl='$tempat_tl', tanggal_lahir='$tanggal_lahir', jenkel='$jenkel', agama='$agama', pekerjaan='$pekerjaan', status_perkawinan='$status_perkawinan', alamat='$alamat' where nomor_kk='$nomor_kk'");
		return $hsl;
	}
	function hapus_kk($nomor_kk) {
		$hsl = $this->db->query("delete from tbkk where nomor_kk='$nomor_kk'");
		return $hsl;
	}

	function get_kk_byid($buka_nomor_kk) {
		$hsl = $this->db->query("select * from tbkk where nomor_kk='$nomor_kk'");
		return $hsl;
	}

}