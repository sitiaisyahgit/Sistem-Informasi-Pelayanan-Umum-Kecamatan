<?php
class M_legalisasi extends CI_Model {

	function get_all_legalisasi() {
		$hsl = $this->db->query("select * from tb_legalisasi");
		return $hsl;
	}
	function simpan_legalisasi($nomor_legalisasi, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $jenis_kelamin, $warganegara, $agama, $alamat) {
		$hsl = $this->db->query("insert into tb_legalisasi(nomor_legalisasi,tanggal_buat,nama,nik,tempat_tl,tanggal_lahir,jenis_kelamin,warganegara,agama,alamat) values('$nomor_legalisasi','$tanggal_buat','$nama', '$nik','$tempat_tl','$tanggal_lahir','$jenis_kelamin','$warganegara','$agama','$alamat')");
		return $hsl;
	}
	function update_legalisasi($nomor_legalisasi, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $jenis_kelamin, $warganegara, $agama, $alamat) {
		$hsl = $this->db->query("update tb_legalisasi set tanggal_buat='$tanggal_buat', nama='$nama', nik='$nik', tempat_tl='$tempat_tl', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', warganegara='$warganegara', agama='$agama', alamat='$alamat' where nomor_legalisasi='$nomor_legalisasi'");
		return $hsl;
	}
	function hapus_legalisasi($nomor_legalisasi) {
		$hsl = $this->db->query("delete from tb_legalisasi where nomor_legalisasi='$nomor_legalisasi'");
		return $hsl;
	}

	function get_legalisasi_byid($buka_nomor_legalisasi) {
		$hsl = $this->db->query("select * from tb_legalisasi where nomor_legalisasi='$nomor_legalisasi'");
		return $hsl;
	}

}