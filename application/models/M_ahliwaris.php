<?php
class M_ahliwaris extends CI_Model {

	function get_all_ahliwaris() {
		$hsl = $this->db->query("select * from tbahliwaris");
		return $hsl;
	}
	function simpan_ahliwaris($nomor_ahliwaris, $tanggal_buat, $nama_ahli_waris, $tempat_tl_ah, $tanggal_lahir_ah, $jenis_kelamin_ah, $agama_ah, $alamat_ah, $nama_pewaris, $tempat_tl_pw, $tanggal_lahir_pw, $jenis_kelamin_pw, $agama_pw, $alamat_pw) {
		$hsl = $this->db->query("insert into tbahliwaris(nomor_ahliwaris,tanggal_buat,nama_ahli_waris,tempat_tl_ah,tanggal_lahir_ah,jenis_kelamin_ah,agama_ah,alamat_ah,nama_pewaris,tempat_tl_pw,tanggal_lahir_pw,jenis_kelamin_pw,agama_pw,alamat_pw) values('$nomor_ahliwaris','$tanggal_buat','$nama_ahli_waris','$tempat_tl_ah','$tanggal_lahir_ah','$jenis_kelamin_ah','$agama_ah','$alamat_ah','$nama_pewaris','$tempat_tl_pw','$tanggal_lahir_pw','$jenis_kelamin_pw','$agama_pw','$alamat_pw')");
		return $hsl;
	}
	function update_ahliwaris($nomor_ahliwaris, $tanggal_buat, $nama_ahli_waris, $tempat_tl_ah, $tanggal_lahir_ah, $jenis_kelamin_ah, $agama_ah, $alamat_ah, $nama_pewaris, $tempat_tl_pw, $tanggal_lahir_pw, $jenis_kelamin_pw, $agama_pw, $alamat_pw) {
		$hsl = $this->db->query("update tbahliwaris set tanggal_buat='$tanggal_buat', nama_ahli_waris='$nama_ahli_waris', tempat_tl_ah='$tempat_tl_ah', tanggal_lahir_ah='$tanggal_lahir_ah', jenis_kelamin_ah='$jenis_kelamin_ah', agama_ah='$agama_ah', alamat_ah='$alamat_ah', nama_pewaris='$nama_pewaris', tempat_tl_pw='$tempat_tl_pw', tanggal_lahir_pw='$tanggal_lahir_pw', jenis_kelamin_pw='$jenis_kelamin_pw', agama_pw='$agama_pw', alamat_pw='$alamat_pw' where nomor_ahliwaris='$nomor_ahliwaris'");
		return $hsl;
	}
	function hapus_ahliwaris($nomor_ahliwaris) {
		$hsl = $this->db->query("delete from tbahliwaris where nomor_ahliwaris='$nomor_ahliwaris'");
		return $hsl;
	}

	function get_ahliwaris_byid($buka_nomor_ahliwaris) {
		$hsl = $this->db->query("select * from tbahliwaris where nomor_ahliwaris='$nomor_ahliwaris'");
		return $hsl;
	}

}