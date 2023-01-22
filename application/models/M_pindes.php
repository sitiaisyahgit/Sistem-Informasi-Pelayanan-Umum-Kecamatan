<?php
class M_pindes extends CI_Model {

	function get_all_pindes() {
		$hsl = $this->db->query("select * from tbpindahdes");
		return $hsl;
	}
	function simpan_pindes($nomor_pindahdes, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah) {
		$hsl = $this->db->query("insert into tbpindahdes(nomor_pindahdes,tanggal_buat,nama,no_kk,nik,nama_kepala_kk,alamat_sekarang,alamat_tujuan,jumlah_pindah) values('$nomor_pindahdes','$tanggal_buat','$nama','$no_kk', '$nik','$nama_kepala_kk','$alamat_sekarang','$alamat_tujuan','$jumlah_pindah')");
		return $hsl;
	}
	function update_pindes($nomor_pindahdes, $tanggal_buat, $nama, $no_kk, $nik, $nama_kepala_kk, $alamat_sekarang, $alamat_tujuan, $jumlah_pindah) {
		$hsl = $this->db->query("update tbpindahdes set tanggal_buat='$tanggal_buat', nama='$nama', no_kk='$no_kk', nik='$nik', nama_kepala_kk='$nama_kepala_kk', alamat_sekarang='$alamat_sekarang', alamat_tujuan='$alamat_tujuan', jumlah_pindah='$jumlah_pindah'where nomor_pindahdes='$nomor_pindahdes'");
		return $hsl;
	}
	function hapus_pindes($nomor_pindahdes) {
		$hsl = $this->db->query("delete from tbpindahdes");
		return $hsl;
	}

	function get_pindes_byid($buka_nomor_pindahdes) {
		$hsl = $this->db->query("select * from tbpindahdes where nomor_pindahdes='$nomor_pindahdes'");
		return $hsl;
	}

}