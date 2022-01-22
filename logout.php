<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['matkhau']);
    header('location:login.php');
?>