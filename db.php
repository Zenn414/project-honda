<?php

$conn = new mysqli("localhost", "root", "", "habit_factory");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

?>