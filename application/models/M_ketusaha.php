<?php
class M_ketusaha extends CI_Model {

	function get_all_ketusaha() {
		$hsl = $this->db->query("select * from tbketusaha");
		return $hsl;
	}
	function simpan_ketusaha($nomor_ketusaha, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $jenis_kelamin, $alamat, $id) {
		$hsl = $this->db->query("insert into tbketusaha(nomor_ketusaha,tanggal_buat,nama,nik,tempat_tl,tanggal_lahir,jenis_kelamin,alamat,id) values('$nomor_ketusaha','$tanggal_buat','$nama','$nik','$tempat_tl','$tanggal_lahir','$jenis_kelamin','$alamat','$id')");
		return $hsl;
	}
	function update_ketusaha($nomor_ketusaha, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $jenis_kelamin, $alamat, $id_user) {
		$hsl = $this->db->query("update tbketusaha set tanggal_buat='$tanggal_buat', nama='$nama', nik='$nik', tempat_tl='$tempat_tl', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', id='$id' where nomor_ketusaha='$nomor_ketusaha'");
		return $hsl;
	}
	function hapus_ketusaha($nomor_ketusaha) {
		$hsl = $this->db->query("delete from tbketusaha where nomor_ketusaha='$nomor_ketusaha'");
		return $hsl;
	}

	function get_ketusaha_byid($buka_nomor_ketusaha) {
		$hsl = $this->db->query("select * from tbketusaha where nomor_ketusaha='$nomor_ketusaha'");
		return $hsl;
	}

}