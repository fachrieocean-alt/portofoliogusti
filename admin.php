<?php
require 'cek_admin.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin - Autentikasi Portofolio</title>

    <link rel="stylesheet" href="style.css">

    <style>
        /* =========================
           SLIDE IN DARI KANAN KE KIRI
        ========================= */

        main.dashboard-content {
            opacity: 0;
            transform: translateX(80px);
            animation: slideInLeft 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(80px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>

<header class="navbar">

    <a href="index.html" class="logo">
        Fachrieocean <span>.</span>
    </a>

    <nav class="nav-menu">
        <a href="index.html">Portfolio</a>
        <a href="admin.php">Dashboard</a>
    </nav>

    <div class="nav-actions">
        <a href="logout.php" class="nav-button">
            Logout ↗
        </a>
    </div>

</header>


<main class="dashboard-content" style="padding: 120px 8%;">

    <h1>PHP DASAR — AUTENTIKASI PORTOFOLIO</h1>

    <p>
        Membuat Halaman Login untuk Website Portofolio
    </p>

    <p>
        Menyiapkan pintu masuk sebelum masuk ke Dashboard & Session
    </p>

    <hr>

    <h2>Informasi Pembelajaran</h2>

    <p><strong>Mata Pelajaran:</strong> Pemrograman Web</p>

    <p><strong>Kelas:</strong> XI PPLG</p>

    <p><strong>Topik:</strong> Form Login, Validasi POST</p>

    <p><strong>Lanjutan:</strong> Dashboard & Session</p>

    <hr>

    <h2>Dashboard Admin</h2>

    <p>
        Selamat datang,
        <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
    </p>

    <p>
        Anda berhasil login sebagai
        <strong>ADMIN</strong>.
    </p>

    <p>
        Halaman ini hanya dapat diakses oleh pengguna dengan role admin.
    </p>

    <br>

    <a href="logout.php" class="nav-button">
        Logout
    </a>

</main>

</body>
</html>