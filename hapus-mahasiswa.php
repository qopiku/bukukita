<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php?pesan=belum_login');
}

include 'koneksi.php';

$id = $_GET['id'];
$query = "delete from mahasiswa where id_mahasiswa = '$id'";

if ($conn->query($query)) {
    header('Location: mahasiswa.php?pesan=berhasil_delete');
} else {
    header('Location: mahasiswa.php?pesan=gagal_delete');
}
