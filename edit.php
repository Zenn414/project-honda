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
    <h1>Edit Data Motor</h1>
    <form method="POST" action>
    <label for="id">ID: </label>
    <input type="text" value="<?= $tampil['id']?>" name="id" required>
    </form>
</body>
</html>