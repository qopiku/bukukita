<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php?pesan=belum_login');
}

include 'koneksi.php';

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];

$query = "update buku set judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit' where id_buku = '$id_buku'";

if ($conn->query($query)) {
    header('Location: buku.php?pesan=berhasil_update');
} else {
    header("Location: edit-buku.php?id=$id_buku&pesan=gagal");
}
