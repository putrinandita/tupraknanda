<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-dashboard">
        <span>Dashboard</span>
        <span class="user-info">Hi, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
    </header>

    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="index.php">Dashboard</a></li> <li><a href="makanan_khas.php">Makanan Khas</a></li> <li><a href="logout.php">Keluar</a></li> </ul>
        </nav>
        
        <main class="content-dashboard">
            <h1>Anda telah berhasil login</h1>
            <p>Selamat datang di halaman dashboard, <?php echo htmlspecialchars($_SESSION['username']); ?>.</p>
        </main>
    </div>

    <footer class="header-footer footer-dashboard">
        FOOTER
    </footer>
</body>
</html>