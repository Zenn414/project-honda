<!DOCTYPE html>

<?php
    include 'db.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Servis Motor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="contain">
        <h1>Service Motor</h1>
        <form action="">
            <div class="field">
                <label for="nama">Nama </label>
                <input type="text" name="nama" id="nama">
            </div>

              <div class="field">
                <label for="telepon">No Telp </label>
                <input type="varchar" name="telepon" id="telepon">
            </div>

              <div class="field">
<<<<<<< HEAD
                <label for="jenis_motor">Jenis Motor </label>
               <select name="jenis_motor" id="jenis_motor">
                <option value="">Honda</option>
=======
                <label for="">Jenis Motor </label>
               <select name="jenis_motor" id="">
                <option value="">Honda</option>
                <option value="">Beat</option>
               </select>
                </div>
               

                <div class="field">
<<<<<<< HEAD
                <label for="tahun_pembuatan">Tahun Pembuatan </label>
                <input type="varchar" name="tahun_pembuatan" id="tahun_pembuatan">
                </div>

                 <div class="field">
                <label for="feedback">Keluhan</label>
                <textarea name="feedback" id="feedback"></textarea>
=======
                <label for="">Tahun Pembuatan </label>
                <input type="text" name="tahun_pembuatan" id="">
                </div>

                 <div class="field">
                <label for="">Keluhan</label>
                <textarea name="" id=""></textarea>
                </div>

                <button>Kirim</button>
        </form>
    </div>
</body>
</html>