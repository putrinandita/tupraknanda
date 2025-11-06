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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan Khas Sulawesi Selatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .main-container {
            flex: 1;
        }
    </style>
</head>
<body class="bg-light">

    <header class="bg-dark text-white p-3 d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Makanan Khas</h3>
        <span class="fs-5">Hi, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
    </header>

    <div class="container-fluid main-container">
        <div class="row">
            
            <aside class="col-md-3 bg-secondary text-white p-3" style="min-height: 100%;">
                <nav>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link text-white">Dashboard</a></li>
                        <li class="nav-item mb-2"><a href="makanan_khas.php" class="nav-link text-white active">Makanan Khas</a></li>
                        <li class="nav-item mb-2"><a href="logout.php" class="nav-link text-white">Keluar</a></li>
                    </ul>
                </nav>
            </aside>

            <section class="col-md-9 p-4">
                <h1 class="mb-4">Daftar Makanan Khas Sulawesi Selatan</h1>
                <div class="mb-3 text-end">
                    <button onclick="location.href='tambah-makanan.html'" class="btn btn-primary">Tambah Data</button>
                </div>
                <table id="food-table" class="table table-bordered table-striped align-middle shadow-sm">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Makanan</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Coto Makassar</td>
                            <td><img src="cotomks.jpeg" alt="Coto Makassar" width="100" class="rounded shadow-sm"></td>
                            <td>Hidangan sup tradisional khas Makassar, terbuat dari daging sapi dan rempah khas.</td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pallubasa</td>
                            <td><img src="pallubasa.jpeg" alt="Pallubasa" width="100" class="rounded shadow-sm"></td>
                            <td>Makanan khas Makassar, mirip dengan Coto Makassar namun dengan tambahan kelapa parut.</td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pisang Ijo</td>
                            <td><img src="pisjo.jpeg" alt="Pisang Ijo" width="100" class="rounded shadow-sm"></td>
                            <td>Hidangan penutup berbahan dasar pisang yang dibalut dengan adonan tepung berwarna hijau.</td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <footer class="bg-dark text-white text-center p-3">
        FOOTER
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>