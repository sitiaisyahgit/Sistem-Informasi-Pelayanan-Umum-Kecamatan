<?php
Class Laporandes extends CI_Controller{
    
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
        $pdf->Cell(400,10,'DAFTAR PELAYANAN PINDAH DESA',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(20,7,'',0,1);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(42,10,'NOMOR PINDAH',1,0);
        $pdf->Cell(42,10,'TANGGAL BUAT',1,0);
        $pdf->Cell(44,10,'NAMA',1,0);
        $pdf->Cell(50,10,'NIK',1,0);
        $pdf->Cell(50,10,'NO KK',1,0);
        $pdf->Cell(50,10,'NAMA KEPALA KK',1,0);
        $pdf->Cell(50,10,'ALAMAT SEKARANG',1,0);
        $pdf->Cell(45,10,'ALAMAT TUJUAN',1,0);
        $pdf->Cell(40,10,'JUMLAH PINDAH',1,0);
        $pdf->Cell(40,10,'ALAMAT',1,1);
        $pdf->SetFont('Arial','',15);
        $tbktp = $this->db->get('tbpindahdes')->result();
        foreach ($tbktp as $row){
            $pdf->Cell(42,10,$row->nomor_pindahdes,1,0);
            $pdf->Cell(42,10,$row->tanggal_buat,1,0);
            $pdf->Cell(44,10,$row->nama,1,0);
            $pdf->Cell(50,10,$row->nik,1,0);
            $pdf->Cell(50,10,$row->no_kk,1,0);
            $pdf->Cell(50,10,$row->nama_kepala_kk,1,0);
            $pdf->Cell(50,10,$row->alamat_sekarang,1,0);
            $pdf->Cell(45,10,$row->alamat_tujuan,1,0);
            $pdf->Cell(40,10,$row->jumlah_pindah,1,1);
        }
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(650,10,'CIMANGGUNG,  NOVEMBER 2021',0,1,'C');
        $pdf->Cell(650,10,'OPERATOR PINDAH DESA',0,1,'C');
        $pdf->Cell(650,10,' ',0,1,'C');
        $pdf->Cell(650,10,' ',0,1,'C');
        $pdf->Cell(650,10,' ',0,1,'C');
        $pdf->Cell(650,10,'INGGIT MARYANA',0,1,'C');
        $pdf->Output();
    }
}
