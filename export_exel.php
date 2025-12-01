<?php
require "vendor/autoload.php";
include 'db.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// 1. SELECT DATA
$sql = "SELECT id, nama_pemilik, no_telepon, plat_nomor, jenis_motor, tahun_pembuatan, harga_servis, tgl_daftar 
        FROM tbl_habit_factory";
$result = $conn->query($sql);

// jika tidak ada data
if ($result->num_rows === 0) {
    die("Tidak ada data.");
}

// 2. BUAT SPREADSHEET
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// 3. HEADER
$sheet->setCellValue("A1", "ID");
$sheet->setCellValue("B1", "Nama Pemilik");
$sheet->setCellValue("C1", "No Telepon");
$sheet->setCellValue("D1", "Plat Nomor");
$sheet->setCellValue("E1", "Jenis Motor");
$sheet->setCellValue("F1", "Tahun Pembuatan");
$sheet->setCellValue("G1", "Harga Servis");
$sheet->setCellValue("H1", "Tanggal Servis");

// 4. ISI DATA
$row = 2;
while ($data = $result->fetch_assoc()) {
    $sheet->setCellValue("A$row", $data['id']);
    $sheet->setCellValue("B$row", $data['nama_pemilik']);
    $sheet->setCellValue("C$row", $data['no_telepon']);
    $sheet->setCellValue("D$row", $data['plat_nomor']);
    $sheet->setCellValue("E$row", $data['jenis_motor']);
    $sheet->setCellValue("F$row", $data['tahun_pembuatan']);
    $sheet->setCellValue("G$row", $data['harga_servis']);
    $sheet->setCellValue("H$row", $data['tgl_daftar']);
    $row++;
}

// 5. DOWNLOAD FILE
$writer = new Xlsx($spreadsheet);
date_default_timezone_set('Asia/Jakarta');
$filename = "servis-motor-honda-" . date("Y-m-d") . ".xlsx";

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=" . $filename);
header('Cache-Control: max-age=0');

$writer->save('php://output');
exit;
?>
