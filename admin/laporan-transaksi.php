<?php
// memanggil library FPDF
require('../lib/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(275,7,'SISTEM INFORMASI PEMESANAN KAMAR HOTEL HORISON KENDARI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(275,7,'DATA TRANSAKSI RESERVASI KAMAR',0,1,'C');
 
$pdf->Line(300,23,-300,23);
$pdf->Line(300,23.5,-300,23.5);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'KODE',1,0);
$pdf->Cell(25,6,'TIPE',1,0);
$pdf->Cell(25,6,'HARGA',1,0);
$pdf->Cell(20,6,'JUMLAH',1,0);
$pdf->Cell(40,6,'NAMA',1,0);
$pdf->Cell(35,6,'TELEPON',1,0);
$pdf->Cell(25,6,'CHECK-IN',1,0);
$pdf->Cell(25,6,'CHECKOUT',1,0);
$pdf->Cell(25,6,'LAMA (hari)',1,0);
$pdf->Cell(35,6,'TOTAL BAYAR',1,1);
 
$pdf->SetFont('Arial','',10);
 
include 'fungsi/koneksi.php';
$bayar = $pdo->query("SELECT * From pemesanan WHERE status='Berhasil'");
while ($row = $bayar->fetch()){
    $pdf->Cell(15,6,$row['idpesan'],1,0);
    $pdf->Cell(25,6,$row['tipe'],1,0);
    $pdf->Cell(25,6,$row['harga'],1,0); 
    $pdf->Cell(20,6,$row['jumlah'],1,0);
    $pdf->Cell(40,6,$row['nama'],1,0);
    $pdf->Cell(35,6,$row['telepon'],1,0);
    $pdf->Cell(25,6,$row['tglmasuk'],1,0);
    $pdf->Cell(25,6,$row['tglkeluar'],1,0); 
    $pdf->Cell(25,6,$row['lamahari'],1,0);
    $pdf->Cell(35,6,$row['totalbayar'],1,1);
}
 
$pdf->Output();
?>