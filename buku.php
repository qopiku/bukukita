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
    <title>Data Buku</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">BukuKita</a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="buku.php">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Buku
                    </div>

                    <div class="card-body">
                        <a href="tambah-buku.php" class="btn btn-md btn-success mb-3">Tambah Data</a>

                        <?php if ($_GET['pesan'] === 'berhasil') : ?>
                            <div class="alert alert-success" role="alert">
                                Data buku berhasil disimpan.
                            </div>
                        <?php endif ?>

                        <?php if ($_GET['pesan'] === 'berhasil_update') : ?>
                            <div class="alert alert-success" role="alert">
                                Data buku berhasil diperbarui.
                            </div>
                        <?php endif ?>

                        <?php if ($_GET['pesan'] === 'berhasil_delete') : ?>
                            <div class="alert alert-success" role="alert">
                                Data buku berhasil dihapus.
                            </div>
                        <?php endif ?>

                        <?php if ($_GET['pesan'] === 'gagal_delete') : ?>
                            <div class="alert alert-danger" role="alert">
                                Data buku gagal dihapus.
                            </div>
                        <?php endif ?>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Pengarang</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Tahun Terbit</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include 'koneksi.php';
                                $no = 1;
                                $query = mysqli_query($conn, "select * from buku");
                                while ($row = mysqli_fetch_array($query)) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['judul'] ?></td>
                                        <td><?php echo $row['pengarang'] ?></td>
                                        <td><?php echo $row['penerbit'] ?></td>
                                        <td><?php echo $row['tahun_terbit'] ?></td>
                                        <td class="text-center">
                                            <a href="edit-buku.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="hapus-buku.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endwhile ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>