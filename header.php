<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelas Kopi Online Sabda Setia</title>
    <link rel="stylesheet" href="css/styless.css">
</head>
<body>

<header>
    <h1>Kelas Kopi Online Sabda Setia</h1>
    <p>Belajar menyeduh kopi dan membangun bisnis kopi rumahan</p>

    <nav>
        <a href="index.php">Beranda</a>
        <a href="login.php">Login Admin</a> </nav>
</header>