<?php 
include "security.php"; 
$username = $_SESSION['username']; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../css/styless.css">
</head>
<body class="dashboard-body">

    welcome, <?php echo $username; ?>
    <br>
    <a href='courses/index.php'>manajemen kelas</a>
    <br>
    <a href='registrations/index.php'>manajemen pendaftaran</a>
    <br>
    <a href='logout.php'>logout</a>

</body>
</html>