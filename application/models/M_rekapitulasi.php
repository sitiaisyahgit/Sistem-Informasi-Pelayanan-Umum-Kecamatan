<?php
class M_rekapitulasi extends CI_Model {
 function get_all_rekapitulasi() {
    $hsl = $this->db->query("SELECT id,judul,deskripsi,DATE_FORMAT(tanggal,'%d/%m/%Y') AS tanggal,oleh,download,data FROM tbrekapitulasi ORDER BY id DESC");
    return $hsl;
  }
  function simpan_file($judul, $deskripsi, $oleh, $file) {
    $hsl = $this->db->query("INSERT INTO tbrekapitulasi(judul,deskripsi,oleh,data) VALUES ('$judul','$deskripsi','$oleh','$file')");
    return $hsl;
  }
  function update_file($kode, $judul, $deskripsi, $oleh, $file) {
    $hsl = $this->db->query("UPDATE tbrekapitulasi SET judul='$judul',deskripsi='$deskripsi',oleh='$oleh',data='$file' WHERE id='$kode'");
    return $hsl;
  }
  function update_file_tanpa_file($kode, $judul, $deskripsi, $oleh) {
    $hsl = $this->db->query("UPDATE tbrekapitulasi SET judul='$judul',deskripsi='$deskripsi',oleh='$oleh' WHERE id='$kode'");
    return $hsl;
  }
  function hapus_file($kode) {
    $hsl = $this->db->query("DELETE FROM tbrekapitulasi WHERE id='$kode'");
    return $hsl;
  }

  function get_file_byid($id) {
    $hsl = $this->db->query("SELECT id,judul,deskripsi,DATE_FORMAT(tanggal,'%d/%m/%Y') AS tanggal,oleh,download,data FROM tbrekapitulasi WHERE id='$id'");
    return $hsl;
  }

  //Front-end
  function get_rekapitulasi_home() {
    $hsl = $this->db->query("SELECT id,judul,deskripsi,DATE_FORMAT(tanggal,'%d/%m/%Y') AS tanggal,oleh,download,data FROM tbrekapitulasi ORDER BY id DESC limit 7");
    return $hsl;
  }

}
?>