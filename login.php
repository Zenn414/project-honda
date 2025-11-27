<!DOCTYPE html>

<?php
    include 'db.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contain">
        <h1>Service Motor</h1>
        <form action="">
            <div class="field">
                <label for="">Nama </label>
                <input type="text" name="nama" id="nama">
            </div>

              <div class="field">
                <label for="">No Telp </label>
                <input type="text" name="telepon" id="">
            </div>

              <div class="field">
                <label for="">Jenis Motor </label>
               <select name="jenis_motor" id="">
                <option value="honda">Honda</option>
                <option value="">Beat</option>
               </select>
                </div>
               

                <div class="field">
                <label for="">Tahun Pembuatan </label>
                <input type="text" name="tahun_pembuatan" id="">
                </div>

                 <div class="field">
                <label for="">Keluhan</label>
                <textarea name="keluhan" id=""></textarea>
                </div>

                <button>Kirim</button>
        </form>
    </div>
</body>
</html>