<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php?pesan=belum_login');
}

include 'koneksi.php';

$id = $_GET['id'];
$query = "delete from buku where id_buku = '$id'";

if ($conn->query($query)) {
    header('Location: buku.php?pesan=berhasil_delete');
} else {
    header('Location: buku.php?pesan=gagal_delete');
}
