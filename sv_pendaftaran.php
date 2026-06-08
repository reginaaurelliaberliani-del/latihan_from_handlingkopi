<?php
<<<<<<< HEAD
include 'koneksi.php';

$full_name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone_number = trim($_POST['phone_number'] ?? '');
$course_id = (int) ($_POST['course_id'] ?? 0);
$participant_count = (int) ($_POST['participant_count'] ?? 0);

$sql = "insert into registrations (full_name, email, phone_number, course_id, participant_count) values(
        '$full_name',
        '$email',
        '$phone_number',
        '$course_id',
        '$participant_count')";
$query = mysqli_query($conn, $sql);

header("Location: index.php");
exit;

?>
=======
session_start();

$kelasList = [
    "Basic Brewing" => 150000,
    "Latte Art Pemula" => 200000,
    "Bisnis Kopi Rumahan" => 250000
];

if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

$errors = [];

if (isset($_POST['daftar'])) {
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $wa = trim($_POST['wa'] ?? '');
    $kelas = $_POST['kelas'] ?? '';
    $jumlah = (int) ($_POST['jumlah'] ?? 0);

    if ($nama == '') {
        $errors[] = "Nama wajib diisi.";
    }

    if ($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid.";
    }

    if ($wa == '') {
        $errors[] = "Nomor WhatsApp wajib diisi.";
    }

    if (!array_key_exists($kelas, $kelasList)) {
        $errors[] = "Pilih kelas yang tersedia.";
    }

    if ($jumlah < 1) {
        $errors[] = "Jumlah peserta minimal 1.";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['success'] = false;
        header("Location: index.php");
        exit;
    }

    $harga = $kelasList[$kelas];
    $total = $harga * $jumlah;

    $_SESSION['order'] = [
        'nama' => $nama,
        'email' => $email,
        'wa' => $wa,
        'kelas' => $kelas,
        'jumlah' => $jumlah,
        'harga' => $harga,
        'total' => $total
    ];

    $_SESSION['success'] = true;

    header("Location: index.php");
    exit;
}

header("Location: index.php");
exit;
>>>>>>> 6589201bbf663923aca1b344d483a4b462ea6f12
