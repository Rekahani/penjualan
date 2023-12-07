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
        header("Location: dasbor.php");
        exit();
    } else {
        // Login gagal
        $error_message = "Login gagal. Periksa kembali email dan password Anda.";
    }
}

// Tutup koneksi ke database
$conn->close();
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
    <title>Dashboard E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="hero">
                <h2 class="heading">Origami</h2>
                <p class="sub-heading">Koleksi Eksklusif Hanya untuk Anda!</p>
            </div>
        </header>

        <nav class="menu">
            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="brand">
                <h1>Selamat Datang, Selamat Berbelanja!</h1>
            </div>
            <ul class="menu-list">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Lainnya</button>
                    <div class="dropdown-content">
                        <a href="#">Profil</a>
                        <a href="#">Pesanan Saya</a>
                    </div>
                </li>
                <li><button onclick="location.href='#'" class="login-button">Login</button></li>
            </ul>
        </nav>

        <main class="dashboard">
            <section id="beranda">
                <h2>Dasbor</h2>
                <p>Selamat datang di dasbor!</p>
            </section>
        </main>

        <footer>
            <p>&copy; 2023 Origami</p>
        </footer>
    </div>

    <script src="script.js"></script>
</body>

</html>
