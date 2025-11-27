<?php
include 'db.php';

$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$typeMotor = $_POST['jenis_motor'];
$tahunPembuatan = $_POST['tahun_pembuatan'];
$keluhan = $_POST['keluhan'];

$query = "INSERT INTO datamotor(nama, telepon, jenis_motor, tahun_pembuatan, feedback) VALUES ('$nama', '$telepon', '$typeMotor', '$tahunPembuatan', '$keluhan')";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    echo "
    <script>
        alert('Data berhasil disimpan.');
        window.location='login.php';
    </script>;
    ";
}