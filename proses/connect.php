<?php
$servername = "localhost"; // Nama server Anda
$username = "root"; // Nama pengguna database Anda
$password = ""; // Kata sandi database Anda
$dbname = "db_masjid"; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
