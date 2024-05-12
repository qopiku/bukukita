<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php?pesan=belum_login');
}

include 'koneksi.php';

$id_mahasiswa = $_POST['id_mahasiswa'];
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

$query = "update mahasiswa set nim = '$nim', nama_lengkap = '$nama_lengkap', alamat = '$alamat' where id_mahasiswa = '$i_mahasiswa'";

if ($conn->query($query)) {
    header('Location: mahasiswa.php?pesan=berhasil_update');
} else {
    header("Location: edit-mahasiswa.php?id=$id_mahasiswa&pesan=gagal");
}
