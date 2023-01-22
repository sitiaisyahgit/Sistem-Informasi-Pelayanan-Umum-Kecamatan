<?php
class M_cetak extends CI_Model {

function get_all_ketusaha() {
		$hsl = $this->db->query("select * from tbketusaha");
		return $hsl;
	}

function get_ketusaha_byid($nomor_ketusaha) {
		$hsl = $this->db->query("select * from tbketusaha where nomor_ketusaha='$nomor_ketusaha'");
		return $hsl;
	}

}