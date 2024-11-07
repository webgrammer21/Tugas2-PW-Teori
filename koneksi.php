<?php
$host = 'localhost'; // atau sesuaikan dengan server Anda
$user = 'root'; // username MySQL Anda
$password = ''; // password MySQL Anda
$dbname = 'nwind'; // nama database yang telah diimport

// Buat koneksi
$konek = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($konek->connect_error) {
    die("Koneksi gagal: " . $konek->connect_error);
}
?>