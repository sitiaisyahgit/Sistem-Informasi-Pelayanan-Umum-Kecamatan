<?php
Class Laporanahliwaris extends CI_Controller{
    
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
        $pdf->Cell(400,10,'DAFTAR PELAYANAN AHLI WARIS',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(20,7,'',0,1);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(40,10,'NOMOR DISNIK',1,0);
        $pdf->Cell(32,10,'TANGGAL',1,0);
        $pdf->Cell(37,10,'NAMA',1,0);
        $pdf->Cell(41,10,'TEMPAT LAHIR',1,0);
        $pdf->Cell(45,10,'TANGGAL LAHIR',1,0);
        $pdf->Cell(20,10,'AGAMA',1,0);
        $pdf->Cell(40,10,'ALAMAT',1,0);
        $pdf->Cell(37,10,'NAMA',1,0);
        $pdf->Cell(41,10,'TEMPAT LAHIR',1,0);
        $pdf->Cell(45,10,'TANGGAL LAHIR',1,0);
        $pdf->Cell(20,10,'AGAMA',1,0);
        $pdf->Cell(40,10,'ALAMAT',1,1);
        $pdf->SetFont('Arial','',15);
        $tbahliwaris = $this->db->get('tbahliwaris')->result();
        foreach ($tbahliwaris as $row){
            $pdf->Cell(40,10,$row->nomor_ahliwaris,1,0);
            $pdf->Cell(32,10,$row->tanggal_buat,1,0);
            $pdf->Cell(37,10,$row->nama_ahli_waris,1,0);
            $pdf->Cell(41,10,$row->tempat_tl_ah,1,0);
            $pdf->Cell(45,10,$row->tanggal_lahir_ah,1,0);
            $pdf->Cell(20,10,$row->agama_ah,1,0);
            $pdf->Cell(40,10,$row->alamat_ah,1,0);
            $pdf->Cell(37,10,$row->nama_pewaris,1,0);
            $pdf->Cell(41,10,$row->tempat_tl_pw,1,0);
            $pdf->Cell(45,10,$row->tanggal_lahir_pw,1,0);
            $pdf->Cell(20,10,$row->agama_pw,1,0);
            $pdf->Cell(40,10,$row->alamat_pw,1,1);
        }
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(650,10,'CIMANGGUNG,  NOVEMBER 2021',0,1,'C');
        $pdf->Cell(650,10,'OPERATOR AHLI WARIS',0,1,'C');
        $pdf->Cell(650,10,' ',0,1,'C');
        $pdf->Cell(650,10,' ',0,1,'C');
        $pdf->Cell(650,10,' ',0,1,'C');
        $pdf->Cell(650,10,'INGGIT MARYANA',0,1,'C');
        $pdf->Output();
    }
}
