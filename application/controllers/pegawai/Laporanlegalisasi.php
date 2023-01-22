<?php
Class Laporanlegalisasi extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A3');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',30);
        // mencetak string
        $pdf->Cell(400,10,'KECAMATAN CIMANGGUNG',0,1,'C');
        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(400,10,'DAFTAR PELAYANAN Legalisasi',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(20,7,'',0,1);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(52,10,'NOMOR LEGALISASI',1,0);
        $pdf->Cell(32,10,'TANGGAL',1,0);
        $pdf->Cell(47,10,'NAMA',1,0);
        $pdf->Cell(52,10,'NIK',1,0);
        $pdf->Cell(41,10,'TEMPAT LAHIR',1,0);
        $pdf->Cell(45,10,'TANGGAL LAHIR',1,0);
        $pdf->Cell(10,10,'JK',1,0);
        $pdf->Cell(42,10,'WARGANEGARA',1,0);
        $pdf->Cell(20,10,'AGAMA',1,0);
        $pdf->Cell(50,10,'ALAMAT',1,1);
        $pdf->SetFont('Arial','',15);
        $tb_legalisasi = $this->db->get('tb_legalisasi')->result();
        foreach ($tb_legalisasi as $row){
            $pdf->Cell(52,10,$row->nomor_legalisasi,1,0);
            $pdf->Cell(32,10,$row->tanggal_buat,1,0);
            $pdf->Cell(47,10,$row->nama,1,0);
            $pdf->Cell(52,10,$row->nik,1,0);
            $pdf->Cell(41,10,$row->tempat_tl,1,0);
            $pdf->Cell(45,10,$row->tanggal_lahir,1,0);
            $pdf->Cell(10,10,$row->jenis_kelamin,1,0);
            $pdf->Cell(42,10,$row->warganegara,1,0);
            $pdf->Cell(20,10,$row->agama,1,0);
            $pdf->Cell(50,10,$row->alamat,1,1);
        }
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(650,10,'CIMANGGUNG,  NOVEMBER 2021',0,1,'C');
        $pdf->Cell(650,10,'OPERATOR LEGALISASI',0,1,'C');
        $pdf->Cell(650,10,' ',0,1,'C');
        $pdf->Cell(650,10,' ',0,1,'C');
        $pdf->Cell(650,10,' ',0,1,'C');
        $pdf->Cell(650,10,'INGGIT MARYANA',0,1,'C');
        $pdf->Output();
    }
}
