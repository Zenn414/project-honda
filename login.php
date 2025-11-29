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
        <h1>Service Motor</h1>

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
                <label for="">No plat: </label>
                <input type="text" name="no_plat" id="">
            </div>

            <!-- Tipe Motor -->
              <div class="field">
                <label for="">Tipe Motor: </label>
               <select name="jenis_motor" id="">
                <option value="vario">Vario</option>
                <option value="beat">Beat</option>
                <option value="scoopy">Scoopy</option>
                <option value="supra">Supra</option>
                <option value="stylo">Stylo</option>
                <option value="CBR 150R">CBR 150R</option>
                <option value="PCX">PCX</option>
                 
               </select>
                </div>
               
                 <!-- Tahun Pembuatan -->
                <div class="field">
                <label for="">Tahun Pembuatan: </label>
                <input type="text" name="tahun_pembuatan" id="">
                </div>
                
                <!-- Keluhan -->
                 <div class="field">
                <label for="">Harga Serivs: </label>
                <input type="number" name="harga_servis" id=""></input>
                </div>

                <!-- Button -->
                <button>Kirim</button>
        </form>
    </div>
</body>
</html>