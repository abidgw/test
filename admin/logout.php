<?php
    session_start();
    unset($_SESSION['admin']['id']);
    unset($_SESSION['admin']['name']);
    unset($_SESSION['admin']['email']);
    unset($_SESSION['admin']['phone']);
    unset($_SESSION['admin']['profession']);
    header("location:index.php");
?>