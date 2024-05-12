<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php?pesan=belum_login');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bukuku</a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="mahasiswa.php">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buku.php">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Tambah Mahasiswa
                    </div>

                    <div class="card-body">
                        <?php if ($_GET['pesan'] === 'gagal') : ?>
                            <div class="alert alert-danger" role="alert">
                                Data mahasiswa gagal disimpan.
                            </div>
                        <?php endif ?>

                        <form method="post" action="simpan-mahasiswa.php">
                            <div class="form-group mb-3">
                                <label>NIM</label>
                                <input type="text" name="nim" placeholder="Masukkan NIM mahasiswa" class="form-control" required>
                            </div>

                            <div class=" form-group mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" placeholder="Masukkan nama mahasiswa" class="form-control" required>
                            </div>

                            <div class=" form-group mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan alamat mahasiswa" required></textarea>
                            </div>

                            <button type=" submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>