<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://ujian.smkcaturglobal.sch.id/pluginfile.php/1/core_admin/logocompact/300x300/1726942860/logo%20catur%20global.png">
    <title>Seluruh Data</title>
</head>

<body>
    <h1>Seluruh Data</h1>

    <?php
    $result = $conn->query("SELECT * FROM tbl_habit_factory");

    $semuaData = [];
    while ($row = $result->fetch_assoc()) {
        $semuaData[] = $row;
    }
    ?>

    <h3>Daftar Data Buku</h3>
    <table border="1" cellpadding="10" cellspasing="0">
        <tr>
            <th>ID</th>
            <th>Nama Pemilik</th>
            <th>No Telepon</th>
            <th>Plat Nomor</th>
            <th>Jenis Motor</th>
            <th>Tahun</th>
            <th>Harga Servis</th>
            <th>Tanggal Daftar</th>
        </tr>

        <?php foreach ($semuaData as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama_pemilik']; ?></td>
                <td><?php echo $row['no_telepon']; ?></td>
                <td><?php echo $row['plat_nomor']; ?></td>
                <td><?php echo $row['jenis_motor']; ?></td>
                <td><?php echo $row['tahun_pembuatan']; ?></td>
                <td><?php echo $row['harga_servis']; ?></td>
                <td><?php echo $row['tgl_daftar']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <form action="export_exel.php" method="POST">
        <button type="submit">Export ke Exel</button>
    </form>
    <form action="login.php">
        <button type="submit">Kembali ke Form</button>
    </form>

</body>

</html>