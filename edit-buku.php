<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php?pesan=belum_login');
}

include 'koneksi.php';

$id = $_GET['id'];
$query = "select * from buku where id_buku = $id limit 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
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
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Buku
                    </div>

                    <div class="card-body">
                        <?php if ($_GET['pesan'] === 'gagal') : ?>
                            <div class="alert alert-danger" role="alert">
                                Data buku gagal diperbarui.
                            </div>
                        <?php endif ?>

                        <form method="post" action="update-buku.php">
                            <input type="hidden" name="id_buku" value="<?php echo $row['id_buku'] ?>">

                            <div class=" form-group mb-3">
                                <label>Judul</label>
                                <input type="text" name="judul" value="<?php echo $row['judul'] ?>" placeholder="Masukkan judul buku" class="form-control" required>
                            </div>

                            <div class=" form-group mb-3">
                                <label>Pengarang</label>
                                <input type="text" name="pengarang" value="<?php echo $row['pengarang'] ?>" placeholder="Masukkan pengarang buku" class="form-control" required>
                            </div>

                            <div class=" form-group mb-3">
                                <label>Penerbit</label>
                                <input type="text" name="penerbit" value="<?php echo $row['penerbit'] ?>" placeholder="Masukkan penerbit buku" class="form-control" required>
                            </div>

                            <div class=" form-group mb-3">
                                <label>Tahun Terbit</label>
                                <input type="number" name="tahun_terbit" value="<?php echo $row['tahun_terbit'] ?>" placeholder="Masukkan tahun terbit buku" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
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