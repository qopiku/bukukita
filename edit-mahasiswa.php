<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php?pesan=belum_login');
}

include 'koneksi.php';

$id = $_GET['id'];
$query = "select * from mahasiswa where id_mahasiswa = $id limit 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
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
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Mahasiswa
                    </div>

                    <div class="card-body">
                        <?php if ($_GET['pesan'] === 'gagal') : ?>
                            <div class="alert alert-danger" role="alert">
                                Data mahasiswa gagal diperbarui.
                            </div>
                        <?php endif ?>

                        <form method="post" action="update-mahasiswa.php">
                            <input type="hidden" name="id_mahasiswa" value="<?php echo $row['id_mahasiswa'] ?>">

                            <div class="form-group mb-3">
                                <label>NIM</label>
                                <input type="text" name="nim" value="<?php echo $row['nim'] ?>" placeholder="Masukkan NIM Mahasiswa" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" placeholder="Masukkan nama Mahasiswa" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan alamat Mahasiswa" rows="4"><?php echo $row['alamat'] ?></textarea>
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