<?php
include 'db.php';
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan pada URL");
}

$id = intval($_GET['id']);

$q = $conn->query("SELECT * FROM tbl_habit_factory WHERE id = $id");
if (!$q) {
    die("Query gagal: " . $conn->error);
}

$data = $q->fetch_assoc();
if (!$data) {
    die("Data tidak ditemukan");
}

$nama = $data['nama_pemilik'];
$telepon = $data['no_telepon'];
$noPlat = $data['plat_nomor'];
$jenisMotor = $data['jenis_motor'];
$tahunPembuatan = $data['tahun_pembuatan'];
$hargaServis = $data['harga_servis'];
$tanggalServis = $data['tgl_daftar'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimasi</title>
    <link rel="icon" href="https://ujian.smkcaturglobal.sch.id/pluginfile.php/1/core_admin/logocompact/300x300/1726942860/logo%20catur%20global.png">
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
                    <p>No Plat: </p>
                    <span><?= $noPlat ?></span>
                </div>

                 <div class="field">
                    <p>Tipe Motor: </p>
                    <span><?= $jenisMotor ?></span>
                </div>

                 <div class="field">
                    <p> Tahun Keluaran: </p>
                    <p><?= $tahunPembuatan ?></p>
                </div>

                 <div class="field textarea">
                    <p>Harga Serivs: </p>
                    <span><?= $hargaServis ?></span>
                </div>

            </div>

            <div class="date">
                <p><?= $tanggalServis ?></p>
            </div>
        </div>
    </div>
    <form action="lihat_data.php">
        <button type="submit">Lihat Data</button>
    </form>
</body>
</html>