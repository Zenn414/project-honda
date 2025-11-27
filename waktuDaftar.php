<?php
include 'db.php';

date_default_timezone_set('Asia/Jakarta');

$tanggalServis = date('Y-m-d H:i:s');

$sql = "INSERT INTO servis (tgl_servis) VALUES ('$tanggalServis')";
mysqli_query($conn, $sql);