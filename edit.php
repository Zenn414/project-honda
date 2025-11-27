<!DOCTYPE html>
<?php
    include 'db.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM servismotor WHERE id";
    $hasil = mysqli_query($conn, $sql);
    $tampil = mysqli_fetch_assoc($hasil);

if ($SERVER['REQUEST_METHOD'] === 'POST'){
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $jenis_motor = $_POST['jenis_motor'];
    $tahun_pembuatan = $_POST['tahun_pembuatan'];
    $feedback = $_POST['feedback'];

    if(mysqli_query($conn, $update_sql)){
        echo "
            <script>
                alert('Data Berhasil Diedit.');
                document.location.href = 'login.php';
            </script>
        ";
    }
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Motor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="contain">
        <h1>Edit Data Motor</h1>
        <form method="POST" action>
            <div class="field">
            <label for="id">ID: </label>
            <input type="text" value="<?= $tampil['id']?>" name="id" required>
            </div>

            <div class="field">
            <label for="nama">Nama: </label>
            <input type="text" value="<?= $tampil['nama']?>" name="nama" required>
            </div>

            <div class="field">
            <label for="telepon">No. Telepon</label>
            <input type="int" value="<?= $tampil['telepon']?>" name="telepon" required>
            </div>

            <div class="field">
            <label for="jenis_motor">Jenis Motor</label>
            <select name="jenis_motor" value="<?=$tampil['jenis_motor']?>" id="jenis_motor" required>
            <option value="">Honda</option>
            <option value="">Beat</option>
            </select>
            </div>

            <div class="field">
                <label for="tahun_pembuatan">Tahun Pembuatan</label>
                <input type="varchar" name="tahun_pembuatan" id="tahun_pembuatan">
            </div>

            <div class="field">
                <label for="feedback">Keluhan</label>
                <textarea name="feedback" id="feedback"></textarea>
            </div>
            
            <button>Edit</button>
        </form>
    </div>
</body>
</html>