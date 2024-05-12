<?php

session_start();

if ($_SESSION['status'] !== 'login') {
    header('Location: login.php');
} else {
    header('Location: mahasiswa.php');
}
