<?php
$host = "localhost"; // Ganti dengan nama host database Anda
$email = "root"; // Ganti dengan email pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda 
$database = "penjualan"; // Ganti dengan nama database Anda

// Membuat koneksi 
$conn = new mysqli($host, $email, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) { 
    die("Koneksi gagal: " . $conn->connect_error);
}