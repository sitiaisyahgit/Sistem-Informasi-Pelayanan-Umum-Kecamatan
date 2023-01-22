<?php
class M_pinkab extends CI_Model {

	function get_all_pinkab() {
		$hsl = $this->db->query("select * from tbpindahkab");
		return $hsl;
	}
	function simpan_pinkab($nomor_pindahkab, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah) {
		$hsl = $this->db->query("insert into tbpindahkab(nomor_pindahkab,tanggal_buat,nama,no_kk,nik,nama_kepala_kk,alamat_sekarang,alamat_tujuan,jumlah_pindah) values('$nomor_pindahkab','$tanggal_buat','$nama','$no_kk', '$nik','$nama_kepala_kk','$alamat_sekarang','$alamat_tujuan','$jumlah_pindah')");
		return $hsl;
	}
	function update_pinkab($nomor_pindahkab, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah) {
		$hsl = $this->db->query("update tbpindahkab set tanggal_buat='$tanggal_buat', nama='$nama', no_kk='$no_kk', nik='$nik', nama_kepala_kk='$nama_kepala_kk', alamat_sekarang='$alamat_sekarang', alamat_tujuan='$alamat_tujuan', jumlah_pindah='$jumlah_pindah' where nomor_pindahkab='$nomor_pindahkab'");
		return $hsl;
	}
	function hapus_pinkab($nomor_pindahkab) {
		$hsl = $this->db->query("delete from tbpindahkab where nomor_pindahkab='$nomor_pindahkab'");
		return $hsl;
	}

	function get_pinkab_byid($buka_nomor_pindahkab) {
		$hsl = $this->db->query("select * from tbpindahkab where nomor_pindahkab='$nomor_pindahkab'");
		return $hsl;
	}

}