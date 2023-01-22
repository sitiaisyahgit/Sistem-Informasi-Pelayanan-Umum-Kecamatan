<?php
class M_pinkec extends CI_Model {

	function get_all_pinkec() {
		$hsl = $this->db->query("select * from tbpindah");
		return $hsl;
	}
	function simpan_pinkec($nomor_pindah, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah) {
		$hsl = $this->db->query("insert into tbpindah(nomor_pindah,tanggal_buat,nama,no_kk,nik,nama_kepala_kk,alamat_sekarang,alamat_tujuan,jumlah_pindah) values('$nomor_pindah','$tanggal_buat','$nama','$no_kk', '$nik','$nama_kepala_kk','$alamat_sekarang','$alamat_tujuan','$jumlah_pindah')");
		return $hsl;
	}
	function update_pinkec($nomor_pindah, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah) {
		$hsl = $this->db->query("update tbpindah set tanggal_buat='$tanggal_buat', nama='$nama', no_kk='$no_kk', nik='$nik', nama_kepala_kk='$nama_kepala_kk', alamat_sekarang='$alamat_sekarang', alamat_tujuan='$alamat_tujuan', jumlah_pindah='$jumlah_pindah' where nomor_pindah='$nomor_pindah'");
		return $hsl;
	}
	function hapus_pinkec($nomor_pindah) {
		$hsl = $this->db->query("delete from tbpindah where nomor_pindah='$nomor_pindah'");
		return $hsl;
	}

	function get_pinkec_byid($buka_nomor_pindah) {
		$hsl = $this->db->query("select * from tbpindah where nomor_pindah='$nomor_pindah'");
		return $hsl;
	}

}