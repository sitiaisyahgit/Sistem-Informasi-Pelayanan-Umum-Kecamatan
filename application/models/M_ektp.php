<?php
class M_ektp extends CI_Model {

	public function get_all_ektp() {
		$hsl = $this->db->query("select * from tbktp ");
		return $hsl;
	}
	function simpan_ektp($nomor_ktp, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $agama, $pekerjaan, $status_perkawinan, $alamat) {
		$hsl = $this->db->query("insert into tbktp(nomor_ktp,tanggal_buat,nama,nik,tempat_tl,tanggal_lahir,agama,pekerjaan,status_perkawinan,alamat) values('$nomor_ktp','$tanggal_buat','$nama','$nik','$tempat_tl','$tanggal_lahir','$agama','$pekerjaan','$status_perkawinan','$alamat')");
		return $hsl;
	}
	function update_ektp($nomor_ktp, $tanggal_buat, $nama, $nik, $tempat_tl, $tanggal_lahir, $agama, $pekerjaan, $status_perkawinan, $alamat) {
		$hsl = $this->db->query("update tbktp set tanggal_buat='$tanggal_buat', nama='$nama', nik='$nik', tempat_tl='$tempat_tl', tanggal_lahir='$tanggal_lahir', agama='$agama', pekerjaan='$pekerjaan', status_perkawinan='$status_perkawinan', alamat='$alamat' where nomor_ktp='$nomor_ktp'");
		return $hsl;
	}

	function hapus_ektp($nomor_ktp) {
		$hsl = $this->db->query("delete from tbktp where nomor_ktp='$nomor_ktp'");
		return $hsl;
	}

	function get_ektp_byid($buka_nomor_ktp) {
		$hsl = $this->db->query("select * from tbktp where nomor_ktp='$nomor_ktp'");
		return $hsl;
	}
	
	
}