<?php
session_start();
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["login-email"];
    $password = $_POST["login-password"];

    // Sesuaikan dengan koneksi ke database dan query validasi login
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    
    // Eksekusi query
    $result = $conn->query($query);

    // Periksa apakah ada hasil yang sesuai
    if ($result && $result->num_rows > 0) {
        // Login berhasil
        $_SESSION["email"] = $email;
        header("Location: login.php");
        exit();
    } else {
        // Login gagal
        $error_message = "Login gagal. Periksa kembali email dan password Anda.";
    }
}

// Tutup koneksi ke database
$conn->close();
?>
