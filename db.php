<?php

$conn = new mysqli("localhost", "root", "", "db-helm");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

?>