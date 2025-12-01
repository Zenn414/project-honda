<?php
include 'db.php';

$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$WarnaHelm = $_POST['warna_helm'];
$HargaRepaint = $_POST['harga_repaint'];
$query = "INSERT INTO tbl_habit_factory(nama_pemilik, no_telepon, warna_helm, harga_repaint) VALUES ('$nama', '$telepon', '$warnahelm', '$jenisMotor', '$tahunPembuatan', '$hargaServis', '$tanggalServis')";
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