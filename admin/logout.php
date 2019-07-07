<?php 
    session_start();
    include_once "../koneksi.php";
    $_SESSION['userlogin'];
    $_SESSION['namelogin'];
    $_SESSION['levellogin'];

    session_destroy();
    header("location: ../home.php");

?>
