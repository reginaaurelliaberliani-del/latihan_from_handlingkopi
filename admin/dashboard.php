<?php
include 'security.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<section>
    <h1>Dashboard Admin</h1>

    <p>Welcome, <strong><?= $_SESSION['username']; ?></strong></p>

    <div class="cards">
        <div class="card">
            <h3>Manajemen Course</h3>
            <p>Kelola data course yang tersedia.</p>
            <a href="courses/index.php">Kelola Course</a>
        </div>

        <div class="card">
            <h3>Manajemen Pendaftaran</h3>
            <p>Kelola data registrasi yang tersedia.</p>
            <a href="registrations/index.php">Kelola Pendaftaran</a>
        </div>

        <div class="card">
            <h3>Akun</h3>
            <p>Keluar dari sistem admin.</p>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</section>

</body>
</html>