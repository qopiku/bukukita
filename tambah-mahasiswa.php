<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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