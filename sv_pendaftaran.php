<?php
include 'koneksi.php';

$full_name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone_number = trim($_POST['phone_number'] ?? '');
$course_id = (int) ($_POST['course_id'] ?? 0);
$participant_count = (int) ($_POST['participant_count'] ?? 0);

$ambil_kursus = mysqli_query($conn, "SELECT price FROM courses WHERE id = '$course_id'");
$data_kursus  = mysqli_fetch_assoc($ambil_kursus);
$unit_price   = $data_kursus['price'];

$sql = "insert into registrations (full_name, email, phone_number, course_id, participant_count, unit_price) values(
        '$full_name',
        '$email',
        '$phone_number',
        '$course_id',
        '$participant_count',
        '$unit_price')";
$query = mysqli_query($conn, $sql);

header("Location: index.php");
exit;

?>