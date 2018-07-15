<?php
// memanggil library FPDF
require('../lib/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SISTEM INFORMASI PEMESANAN KAMAR HOTEL HORISON KENDARI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PEMBAYARAN RESERVASI KAMAR',0,1,'C');
 
$pdf->Line(230,23,-230,23);
$pdf->Line(230,23.5,-230,23.5);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'KODE',1,0);
$pdf->Cell(40,6,'NAMA LENGKAP',1,0);
$pdf->Cell(25,6,'JUMLAH',1,0);
$pdf->Cell(25,6,'BANK',1,0);
$pdf->Cell(40,6,'NO REKENING',1,0);
$pdf->Cell(40,6,'PEMILIK REKENING',1,1);
 
$pdf->SetFont('Arial','',10);
 
include 'fungsi/koneksi.php';
$bayar = $pdo->query("SELECT * From pembayaran");
while ($row = $bayar->fetch()){
    $pdf->Cell(15,6,$row['idpesan'],1,0);
    $pdf->Cell(40,6,$row['nama'],1,0);
    $pdf->Cell(25,6,$row['jumlah'],1,0);
    $pdf->Cell(25,6,$row['bank'],1,0); 
    $pdf->Cell(40,6,$row['norek'],1,0);
    $pdf->Cell(40,6,$row['namarek'],1,1);
}
 
$pdf->Output();
?>