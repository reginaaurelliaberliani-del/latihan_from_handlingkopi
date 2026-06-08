<?php
session_start();

<<<<<<< HEAD
session_destroy();

header("Location: ../login.php");
exit;
=======
$username = $_SESSION['username'];

if($username == ""){
    header("Location: ../login.php");
    exit;
}

>>>>>>> 6589201bbf663923aca1b344d483a4b462ea6f12
?>