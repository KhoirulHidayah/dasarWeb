<?php
// Informasi database
$host = "localhost"; // Ganti sesuai dengan host database Anda
$username = "root"; // Ganti sesuai dengan username database Anda
$password = "khoirul23"; // Ganti sesuai dengan password database Anda
$database = "prakwebdb"; // Ganti sesuai dengan nama database Anda
$table = "user";

// Buat koneksi
$connect = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
