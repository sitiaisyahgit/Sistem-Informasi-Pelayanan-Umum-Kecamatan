<?php
class M_pengunjungkk extends CI_Model {

	function statistik_pengujungkk() {
		$query = $this->db->query("SELECT DATE_FORMAT(tanggal_buat,'%d') AS tgl,COUNT(nomor_kk) AS jumlah FROM tbkk WHERE MONTH(tanggal_buat)=MONTH(CURDATE()) GROUP BY DATE(tanggal_buat)");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}


	
}
