<?php
include 'db.php';

$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$noPlat = $_POST['no_plat'];
$jenisMotor = $_POST['jenis_motor'];
$tahunPembuatan = $_POST['tahun_pembuatan'];
$hargaServis = $_POST['harga_servis'];
date_default_timezone_set('Asia/Jakarta');
$tanggalServis = date('Y-m-d H:i:s');
$query = "INSERT INTO tbl_habit_factory(nama_pemilik, no_telepon, plat_nomor, jenis_motor, tahun_pembuatan, harga_servis, tgl_daftar) VALUES ('$nama', '$telepon', '$noPlat', '$jenisMotor', '$tahunPembuatan', '$hargaServis', '$tanggalServis')";
$hasil = $conn->query($query);

if ($hasil) {
    $idBaru = mysqli_insert_id($conn);
    echo "
    <script>
        alert('Data berhasil disimpan.');
        window.location='estimasi.php?id=$idBaru';
    </script>
    ";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}