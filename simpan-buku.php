<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php?pesan=belum_login');
}

include 'koneksi.php';

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];

$query = "insert into buku (judul, pengarang, penerbit, tahun_terbit) values ('$judul', '$pengarang', '$penerbit', '$tahun_terbit')";

if ($conn->query($query)) {
    header('Location: buku.php?pesan=berhasil');
} else {
    header('Location: tambah-buku.php?pesan=gagal');
}
