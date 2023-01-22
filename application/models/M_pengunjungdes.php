<?php
class M_pengunjungdes extends CI_Model {

	function statistik_pengujungdes() {
		$query = $this->db->query("SELECT DATE_FORMAT(tanggal_buat,'%d') AS tgl,COUNT(nomor_pindahdes) AS jumlah FROM tbpindahdes WHERE MONTH(tanggal_buat)=MONTH(CURDATE()) GROUP BY DATE(tanggal_buat)");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}


	
}
