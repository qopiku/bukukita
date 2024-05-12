<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php?pesan=belum_login');
}

include 'koneksi.php';

$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

$query = "insert into mahasiswa (nim, nama_lengkap, alamat) values ('$nim', '$nama_lengkap', '$alamat')";

if ($conn->query($query)) {
    header('Location: mahasiswa.php?pesan=berhasil');
} else {
    header('Location: tambah-mahasiswa.php?pesan=gagal');
}
