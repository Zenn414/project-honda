<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="https://ujian.smkcaturglobal.sch.id/pluginfile.php/1/core_admin/logocompact/300x300/1726942860/logo%20catur%20global.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contain">
        <!-- h1 -->
        <div class="card-header">
        <h1> Daftar Repaint Helm</h1>

        <div class="logo">
            <img src="img/logo-honda.png" alt="" width="100">
            <img src="img/logo-cg.jpg" alt="">
        </div>
        </div>
        <form action="add.php" method="POST">
            
            <!-- Inputan -->

             <!-- Nama -->
            <div class="field">
                <label for="">Nama: </label>
                <input type="text" name="nama" id="">
            </div>

                 <!-- No telp -->
            <div class="field">
                <label for="">No Telp: </label>
                <input type="text" name="telepon" id="">
            </div>
                
            <div class="field">
                <label for="">Warna Helm: </label>
                <input type="text" name="warna_helm" id="">
            </div>

                <!-- Keluhan -->
                 <div class="field">
                <label for="">Harga Repaint: </label>
                <input type="number" name="harga_repaint" id=""></input>
                </div>

                <!-- Button -->
                <button>Kirim</button>
        </form>
    </div>
</body>
</html>