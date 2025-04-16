<?php
$host = "localhost";  // Ganti jika menggunakan server yang berbeda
$username = "root";   // Username database
$password = "";       // Password database
$dbname = "photo_db"; // Nama database

// Koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);

// Cek apakah terjadi kesalahan koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
