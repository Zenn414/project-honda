<?php
include 'db.php';
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan pada URL");
}

$id = intval($_GET['id']);

$q = mysqli_query($conn, "SELECT * FROM datamotor WHERE id = $id");
$data = mysqli_fetch_assoc($q);

$nama           = $data['nama'];
$telepon        = $data['telepon'];
$typeMotor      = $data['jenis_motor'];
$tahunPembuatan = $data['tahun_pembuatan'];
$keluhan        = $data['feedback'];
$tanggalServis  = $data['tgl_servis'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimasi</title>
    <link rel="stylesheet" href="estimasi.css">
</head>
<body>
    <div class="contain">
        <div class="card">

        <h1>Keterangan Service</h1>

            <div class="output">
                <div class="field">
                    <p>Nama: </p>
                    <span><?= $nama ?></span>
                    
                </div>
                
                 <div class="field">
                    <p>No Telp: </p>
                    <span><?= $telepon ?></span>
                </div>

                 <div class="field">
                    <p>Tipe Motor: </p>
                    <span><?= $typeMotor ?></span>
                </div>

                 <div class="field">
                    <p> Tahun Keluaran: </p>
                    <p><?= $tahunPembuatan ?></p>
                </div>

                 <div class="field textarea">
                    <p>Keluhan: </p>
                    <span><?= $keluhan ?></span>
                </div>

            </div>

            <div class="date">
                <p><?= $tanggalServis ?></p>
            </div>
        </div>
    </div>
</body>
</html>